<?php;
/*
	$config['servername'] = 'localhost';
	$config['username'] = 'root';
	$config['password'] = 'admin';
	$config['database'] = 'cafechoi';

	$d = new database($config);
	#$d->init($config);
	#$d->connect();
	
	// insert
	$data['ten'] = 'Danh mục 1';
	$data['mota'] = 'Mô tả cho Danh mục 1';
	$data['active'] = '0';

	if(!$d->insert($data)){
		$d->showError();
		$d->debug();
	}
	
	// update
	$data['active'] = '1';
	$d->setWhere("id",3);
	
	if(!$d->update($data)){
		$d->showError();
		$d->debug();
	}

	// select
	$d->setTable("pro_cat");
	$d->setWhere("id",3);
	$d->setOrder("id desc");
	$d->setLimit("0,3");
	
	if(!$d->select()){
		$d->showError();
		$d->debug();
	}else{
		var_dump($d->result_array());
	}

	// delete
	$d->setTable("pro_cat");
	$d->setWhere("id",3);
	$d->delete();
	
*/	
class database{
	
	private 	$db;
	private 	$result;
	private 	$insert_id;
	private 	$sql 				= 			"";
	private 	$refix 				=			"";

	private 	$servername;
	private 	$username;
	private 	$password;
	private 	$database;
	
	private 	$table 				= 			"";
	private 	$where 				= 			"";
	private 	$order 				= 			"";
	private 	$limit 				= 			"";

	private		$_current_page  	= 			1; // Trang hiện tại
    private		$_total_record  	= 			1; // Tổng số record
    private		$_total_page    	= 			1; // Tổng số trang
    private		$_limit        		= 			10;// limit
    private		$_start        		= 			0; // start
    private		$_link_full     	= 			'';// Link full có dạng như sau: domain/com/page/{page}
    private		$_link_first    	= 			'';// Link trang đầu tiên
    private		$_range        		= 			9; // Số button trang bạn muốn hiển thị 
    private		$_min           	= 			0; // Tham số min
    private		$_max				= 			0;

	public function phantrang($current_page,$limitR,$range,$link_first,$link_full){
	
	
		$this->_current_page 		= 			$current_page;
		$this->_limit 				=			$limitR;
		$this->_link_first 			= 			$link_first;
		$this->_link_full 			= 			$link_full;
		/*
         * Kiểm tra thông số limit truyền vào có nhỏ hơn 0 hay không?
         * Nếu nhỏ hơn thì gán cho limit = 0, vì trong mysql không cho limit bé hơn 0
         */
        if ($this->_limit < 0){
            $this->_limit = 0;
        }
		
		
		
		if(!empty($this->where))
		{
			$sql 	= 	'SELECT * FROM '.$this->refix.$this->table.$this->where ;
		}
		else
		{
			$sql 	= 	'SELECT * FROM '.$this->refix.$this->table ;
		}
		
		
		$this->query($sql);
		$this->_total_record=$this->num_rows();
		
        /*
         * Tính total page, công tức tính tổng số trang như sau: 
         * total_page = ciel(total_record/limit).
         * Tại sao lại như vậy? Đây là công thức tính trung bình thôi, ví
         * dụ tôi có 1000 record và tôi muốn mỗi trang là 100 record thì 
         * đương nhiên sẽ lấy 1000/100 = 10 trang đúng không nào :D
         */
        $this->_total_page  = ceil($this->_total_record / $this->_limit);
		
        /*
         * Sau khi có tổng số trang ta kiểm tra xem nó có nhỏ hơn 0 hay không
         * nếu nhỏ hơn 0 thì gán nó băng 1 ngay. Vì mặc định tổng số trang luôn bằng 1
         */
		if (!$this->_total_page)
		{
            $this->_total_page = 1;
        }
         
        /*
         * Trang hiện tại sẽ rơi vào một trong các trường hợp sau:
         *  - Nếu người dùng truyền vào số trang nhỏ hơn 1 thì ta sẽ gán nó = 1 
         *  - Nếu trang hiện tại người dùng truyền vào lớn hơn tổng số trang
         *    thì ta gán nó bằng tổng số trang
         * Đây là vấn đề giúp web chạy trơn tru hơn, vì đôi khi người dùng cố ý
         * thay đổi tham số trên url nhằm kiểm tra lỗi web của chúng ta
         */
		if ($this->_current_page < 1)
		{
            $this->_current_page = 1;
        }
         
		if ($this->_current_page > $this->_total_page)
		{
            $this->_current_page = $this->_total_page;
        }
         
        /* 
         * Tính start, Như bạn biết trong mysql truy vấn sẽ có limit và start
         * Muốn tính start ta phải dựa vào số trang hiện tại và số limit trên mỗi trang
         * và áp dụng công tức start = (current_page - 1)*limit
        */
        $this->_start = ($this->_current_page - 1) * $this->_limit;
		 
		// thuc hien truy van sql 
		$sql = "SELECT * FROM ".$this->refix.$this->table.' '.$this->where.' '.$this->order .' LIMIT '. $this->_start.','.$this->_limit;
		
		$this->query($sql);
	
        /* 
         * Bây giờ ta tính số trang ta show ra trang web
         * Như bạn biết với những website có data lớn thì số trang có thể
         * lên tới hàng trăm trang, chẵng nhẽ ta show hết cả 100 trang?
         * Nên trong bài này tôi hướng dẫn bạn show trong một khoảng nào đó (range)
         * giống website freetuts.net vậy
        */
         
        // Trước tiên tính middle, đây chính là số nằm giữa trong khoảng tổng số trang
        // mà bạn muốn hiển thị ra màn hình
        $middle = ceil($this->_range / 2);
 
        // Ta sẽ lâm vào các trường hợp như bên dưới
        // Trong trường hợp này thì nếu tổng số trang mà bé hơn range
        // thì ta show hết luôn, không cần tính toán làm gì
        // tức là gán min = 1 và max = tổng số trang luôn
        if ($this->_total_page < $this->_range){
            $this->_min = 1;
            $this->_max = $this->_total_page;
        }
        // Trường hợp tổng số trang mà lớn hơn range
        else
        {
            // Ta sẽ gán min = current_page - (middle + 1)
            $this->_min = $this->_current_page - $middle + 1;
             
            // Ta sẽ gán max = current_page + (middle - 1)
            $this->_max = $this->_current_page + $middle - 1;
             
            // Sau khi tính min và max ta sẽ kiểm tra
            // nếu min < 1 thì ta sẽ gán min = 1  và max bằng luôn range
            if ($this->_min < 1){
                $this->_min = 1;
                $this->_max = $this->_range;
            }
             
            // Ngược lại nếu min > tổng số trang
            // ta gán max = tổng số trang và min = (tổng số trang - range) + 1 
            else if ($this->_max > $this->_total_page) 
            {
                $this->_max = $this->_total_page;
                $this->_min = $this->_total_page - $this->_range + 1;
            }
		}
		
	}
	private function __link($page)
    {

        // Nếu trang < 1 thì ta sẽ lấy link first
        if ($page <= 1 && $this->_link_first){
            return $this->_link_first;
        }
        // Ngược lại ta lấy link_full
        // Như tôi comment ở trên, link full có dạng domain.com/page/{page}.
        // Trong đó {page} là nơi bạn muốn số trang sẽ thay thế vào
        return str_replace('{page}', $page, $this->_link_full);
    }
     
    /*
     * Hàm lấy mã html
     * Hàm này ban tạo giống theo giao diện của bạn
     * tôi không có config nhiều vì rất rối
     * Bạn thay đổi theo giao diện của bạn nhé
     */
    public function html()
    {   
		$p = '';
	
        if ($this->_total_record > $this->_limit)
        {
            $p = '<ul class="pagination">';
             
            // Nút prev và first
            if ($this->_current_page > 1)
            {
                $p .= '<li><a href="'.$this->__link('1').'">First</a></li>';
                $p .= '<li><a href="'.$this->__link($this->_current_page - 1 ).'">Prev</a></li>';
            }
             
            // lặp trong khoảng cách giữa min và max để hiển thị các nút
            for ($i = $this->_min; $i <= $this->_max; $i++)
            {
                // Trang hiện tại
                if ($this->_current_page == $i){
                    $p .= '<li class="active"><a href="#">'.$i.'</a></li>';
                }
                else{
				
                    $p .= '<li><a href="'.$this->__link($i).'">'.$i.'</a></li>';
                }
            }
 
            // Nút last và next
            if ($this->_current_page < $this->_total_page)
            {
                $p .= '<li><a href="'.$this->__link($this->_current_page + 1).'">Next</a></li>';
                $p .= '<li><a href="'.$this->__link($this->_total_page).'">Last</a></li>';
            }
             
            $p .= '</ul>';
        }
        return $p;
	}
	public function htmlajax($namefunction,$trangthai)
    { 
		$nameF = trim($namefunction);
		$p = '';
	
        if ($this->_total_record > $this->_limit)
        {
            $p = '<ul class="pagination">';
             
            // Nút prev và first
            if ($this->_current_page > 1)
            {
                $p .= '<li><button onclick="'.$nameF.'(1,'.$trangthai.')">First</button></li>';
                $p .= '<li><button onclick="'.$nameF.'('.($this->_current_page-1).','.$trangthai.')">Prev</button></li>';
            }
             
            // lặp trong khoảng cách giữa min và max để hiển thị các nút
            for ($i = $this->_min; $i <= $this->_max; $i++)
            {
                // Trang hiện tại
                if ($this->_current_page == $i){
                    $p .= '<li class="active"><button>'.$i.'</button></li>';
                }
                else{
				
					$p .= '<li><button onclick="'.$nameF.'('.($i).','.$trangthai.')">'.$i.'</button></li>';
                }
            }
 
            // Nút last và next
            if ($this->_current_page < $this->_total_page)
            {
				$p .= '<li><button onclick="'.$nameF.'('.($this->_current_page+1).','.$trangthai.')">Next</button></li>';
				$p .= '<li><button onclick="'.$nameF.'('.($this->_total_page).','.$trangthai.')">Last</button></li>';
            }
             
            $p .= '</ul>';
        }
        return $p;
    }


	public function database($config = array()){
		if(!empty($config)){
			$this->init($config);
			$this->connect();
		}
	}

	public function init($config = array()){
		foreach($config as $k=>$v)
			$this->$k = $v;
	}
	
	public function connect(){
		$this->db = @mysql_connect($this->servername, $this->username, $this->password);
		
		if( !$this->db){
			die('Could not connect: ' . mysql_error());
		}
		
		if( !mysql_select_db($this->database, $this->db)){
			die(mysql_errno($this->db) . ": " . mysql_error($this->db));
			return false;
		}
		
		mysql_query('SET NAMES "utf8"',$this->db);
		
	}
	
	public function query($sql=""){
		if($sql)
			$this->sql = str_replace('#_', $this->refix, $sql);
		$this->result = mysql_query($this->sql,$this->db);
		if(!$this->result){
			#die(mysql_errno($this->db) . ": " . mysql_error($this->db));
			die("syntax error: ".$this->sql);
		}
		return $this->result;	
	}
	
	public function insert($data = array()){
		$key = "";
		$value = "";
		foreach($data as $k => $v){
			$key .= "," . $k;
			$value .= ",'" . $v  ."'";
		}
		if($key{0} == ",") $key{0} = "(";
		$key .= ")";
		if($value{0} == ",") $value{0} = "(";
		$value .= ")";
		$this->sql = "insert into ".$this->refix.$this->table.$key." values ".$value;
		$this->query();
		$this->insert_id = mysql_insert_id();
		return $this->result;
	}
	
	public function update($data = array()){
		$values = "";
		foreach($data as $k => $v){
			$values .= ", " . $k . " = '" . $v  ."' ";
		}
		if($values{0} == ",") $values{0} = " ";
		$this->sql = "update " . $this->refix . $this->table . " set " . $values;
		$this->sql .= $this->where;
		return $this->query();
	}
	
	public function delete(){
		$this->sql = "delete from " . $this->refix . $this->table . $this->where;
		return $this->query();
	}
	
	public function select($str = "*"){
		$this->sql = "select " .$this->refix.$this->table.'.'. $str;
		$this->sql .= " from " . $this->refix .$this->table;
		$this->sql .=  $this->where;
		$this->sql .=  $this->order;
		$this->sql .=  $this->limit;
		return $this->query();
	}
	public function selectMultiTable($str){
		if(is_array($str))
		{
			$strTable = '';
			foreach($str as $value)
			{
				$strTable .= $this->refix.$value.',';
			}
			
			$strTable = substr($strTable, 0, -1);
			$this->sql = "select " . $strTable;
			$this->sql .= " from " . $this->refix .$this->table;
			$this->sql .=  $this->where;
			$this->sql .=  $this->order;
			$this->sql .=  $this->limit;
			return $this->query();
		}
		else
		{
			$this->sql = "select " . $str;
			$this->sql .= " from " . $this->refix .$this->table;
			$this->sql .=  $this->where;
			$this->sql .=  $this->order;
			$this->sql .=  $this->limit;
			return $this->query();
		}
		
	}
	
	public function num_rows(){
		return mysql_num_rows($this->result);
	}
	public function num_fields ($query_id)
  	{   
	    return mysql_num_fields($query_id);
  	}
  
	public function fetch_array(){
		return mysql_fetch_assoc($this->result);
	}
	
	public function result_array(){
		$arr = array();
		while ($row = mysql_fetch_assoc($this->result)) 
			$arr[] = $row;
		return $arr;
	}
	
	public function setTable($str){
		$this->table = $str;
	}
	public function setMultiTable($arrTable = array())
	{
		$strTable = '';
		foreach($arrTable as $value)
		{
			$strTable .= $this->refix.$value.',';
		}
		$strTable = substr($strTable, 6);
		$strTable = substr($strTable, 0, -1);
		$this->table = $strTable;
	}
	public function setMultiWhereTable($key, $value=""){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " .$this->refix.$key . " = " .$this->refix.$value . "";
			else
				$this->where .= " and " .$this->refix.$key . " = " .$this->refix.$value ."";
		}
		else{
			if($this->where == "")
				$this->where = " where " .$this->refix.$key ;
			else
				$this->where .= " and " . $this->refix.$key ;
		}
	}
	public function setMultiWhereValue($key, $value=""){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " .$this->refix.$key . " = " .$value . "";
			else
				$this->where .= " and " .$this->refix.$key . " = " .$value ."";
		}
		else{
			if($this->where == "")
				$this->where = " where " .$this->refix.$key ;
			else
				$this->where .= " and " . $this->refix.$key ;
		}
	}
	public function setWhere($key, $value=""){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " . $this->refix.$this->table.'.'.$key . " = '" . $value . "'";
			else
				$this->where .= " and " .$this->refix.$this->table.'.'.$key . " = '" . $value ."'";
		}
		else{
			if($this->where == "")
				$this->where = " where " . $this->refix.$this->table.'.'.$key ;
			else
				$this->where .= " and " . $this->refix.$this->table.'.'.$key ;
		}
	}
	public function setWhereIN($key, $value=array()){
		$strin='';
	foreach($value as $val)
	{
       $strin .= $val.',';
	}
	$strin= substr($strin, 0, -1);
			
				$this->where = " where " . $this->refix.$this->table.'.'.$key . " IN( " . $strin . ")";
			
		
		
	}
	public function setWhereLike($key, $value){
		
				$this->where = " where " . $this->refix.$this->table.'.'.$key . " like '%" . $value . "%'";
		
			
		
		
	}
	public function setBetween($dkkhac,$start, $end){
		
		$this->where = " where " . $dkkhac.' '."   BETWEEN '".$start."' AND '".$end."'";

	


}
	
	public function setWhereOr($key, $value){
		if($value!=""){
			if($this->where == "")
				$this->where = " where " . $key . " = " . $value;
			else
				$this->where .= " or " . $key . " = " . $value;
		}
		else{
			if($this->where == "")
				$this->where = " where " . $key ;
			else
				$this->where .= " or " . $key ;
		}
	}
	
	public function setOrder($str){
		$this->order = " order by " . $str;
	}
	
	public function setLimit($str){
		$this->limit = " limit " . $str;
	}
	
	public function setError($msg){
		$this->error[] = $msg;
	}
	
	public function showError(){
		foreach($this->error as $value)
			echo '<br>'.$value;
	}
	
	public function reset(){
		$this->sql = "";
		$this->result = "";
		$this->where = "";
		$this->order = "";
		$this->limit = "";
		$this->table = "";
	}
	
	public function debug(){
		echo "<br> servername: ".$this->servername;
		echo "<br> username: ".$this->username;
		echo "<br> password: ".$this->password;
		echo "<br> database: ".$this->database;
		echo "<br> ".$this->sql;
	}
	public function __destruct()
	{
		
	}
	
}
/*
$config['database']['servername'] = 'localhost';
$config['database']['username'] = 'root';
$config['database']['password'] = 'anhhuy1995';
$config['database']['database'] = 'spa1';
$config['database']['refix'] = 'table_';


$db = new database($config['database']);
 $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

 $link = $_SERVER['PHP_SELF'];
$query = $db->phantrang('sanpham','Where idSanPham = 23','order by idSanPham DESC',$currentPage,10,9,$link,$link.'?page={page}');
 $cot = $db->fetch_array($query);
 echo $cot['tenSanPham'];
echo $db->html();
*/
 
?>
 

