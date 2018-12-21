<div class="footer">
	   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
	
	<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
    <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [
              { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [
              { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [
              { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [
              { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
            ]
        };
        $(function () {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function () {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });

    </script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	<script>
        function xemKyNang(idNhanVien)
            {
                var strkq = "#kqKyNang"+idNhanVien;
                var strbtn = "#bu"+idNhanVien;
                $(strbtn).hide();
	            $.ajax({
                        method: "POST",
                        url: "./ajax/xemkynang.php",
                         data: { idNV: idNhanVien,},
                         success: function(result){
                            
                            $(strkq).html(result);
            }});
           

           
}
function xoaDichVu(iddichvu,linksrc=1)
            {
               
               var r = confirm("Bạn có muốn xóa không!");
               if (r == true) {
                $("#faq_search_input").val("");
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoadichvu.php",
                         data: { iddv: iddichvu,page:linksrc},
                         success: function(result){
                            $("#kqdv").html(result);
            }});
       
    }
              
	            
            }
            function xoaDonDatSanPham(idsanpham,linksrc=1)
            {
               
               var r = confirm("Bạn có muốn xóa không!");
               if (r == true) {
                $("#faq_search_input").val("");
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoadondatsanpham.php",
                         data: { idddsp: idsanpham,page:linksrc},
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
       
    }
              
	            
            }
            function xoaSanPham(idsanpham,linksrc=1)
            {
               
               var r = confirm("Bạn có muốn xóa không!");
               if (r == true) {
                $("#faq_search_input").val("");
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoasanpham.php",
                         data: { idsp: idsanpham,page:linksrc},
                         success: function(result){
                            $("#kqsp").html(result);
            }});
       
    }  
            }
            function daXongDichVu($pagedv=1)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/daxongdichvu.php",
                         data: {page:$pagedv},
                         success: function(result){
                            $("#kqddv").html(result);
            }});
       
	            
            }
            function dangLamDichVu($pagedv=1)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/danglamdichvu.php",
                         data: {page:$pagedv},
                         success: function(result){
                            $("#kqddv").html(result);
            }});
       
	            
            }
            function khachHangHuyDichVu($pagedv=1)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/khachhanghuydichvu.php",
                         data: {page:$pagedv},
                         success: function(result){
                            $("#kqddv").html(result);
            }});
       
	            
            }
            function congTyHuyDichVu($pagedv=1)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/congtyhuydichvu.php",
                         data: {page:$pagedv},
                         success: function(result){
                            $("#kqddv").html(result);
            }});
       
	            
            }
            function daXuLyDichVu()
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/daxulydichvu.php",
                         success: function(result){
                            $("#kqddv").html(result);
            }});
       
	            
            }
            function dangGiao()
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/danggiao.php",
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
       
	            
            }
            function dangChoXuLySP(pagedv=1,idtt=1)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/dangchoxulysanpham.php",
                        data: {page:pagedv,idtrangthai:idtt},
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
       
	            
            }
            function dangChoXuLyDV(pagedv=1,idtt=1)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/dangchoxulydichvu.php",
                        data: {page:pagedv,
                        idtrangthai:idtt
                        },
                         success: function(result){
                            $("#kqddv").html(result);
            }});
       
	            
            }
            function khachHangHuySanPham($pagedv=1)
            {
               
                $.ajax({
                        method: "GET",
                        data: {page:$pagedv},
                        url: "./ajax/khachhanghuysanpham.php",
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
       
	            
            }
            function congTyHuySanPham($pagedv=1)
            {
               
                $.ajax({
                        method: "GET",
                        data: {page:$pagedv},
                        url: "./ajax/congtyhuysanpham.php",
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
       
	            
            }
            function daGiao()
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/dagiao.php",
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
       
	            
            }

function xoaLoaiKhachHang(idlkh)
            {
              
              
	        var r = confirm("Bạn có muốn xóa không!");
               if (r == true) {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoaloaikhachhang.php",
                         data: { idloaithanhvien: idlkh},
                         success: function(result){
                            $("#kqlkh").html(result);
            }});
            }
            }


           function xoaCoSo(idcoso)
            {
              
               
	            $.ajax({
                        method: "GET",
                        url: "./ajax/xoacoso.php",
                         data: { idcs: idcoso},
                         success: function(result){
                            $("#kqcs").html(result);
            }});
            }
            
            function xoaAnhTrungTam(idAnhTT)
            {
              
               
	            $.ajax({
                        method: "GET",
                        url: "./ajax/xoaanhtrungtam.php",
                         data: { idAnh: idAnhTT},
                         success: function(result){
                            $("#kqatt").html(result);
            }});
            }
            function ChangeTrangThai(iddondat)
            {
              
              
	            $.ajax({
                        method: "GET",
                        url: "./ajax/thaydoitrangthaidichvu.php",
                         data: { idtrangthai: $("#trangthaidv").val(),
                         iddd:iddondat
                         },
                         success: function(result){
                            $("#kqddv").html(result);
            }});
            }
            function ChangeTrangThaiSP(iddondat)
            {
              
              
	            $.ajax({
                        method: "GET",
                        url: "./ajax/thaydoitrangthaisp.php",
                         data: { idtrangthai: $("#trangthaisp").val(),
                         iddd:iddondat
                         },
                         success: function(result){
                            $("#kqddsp").html(result);
            }});
            }
            function ChangeLoaiThanhVien()
            {
                var ltv = $("#selectThanhVien").val();
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/thaydoitrangthaithanhvien.php",
                         data: { idloathanhvien: ltv},
                         success: function(result){
                            $("#kqtt").html(result);
            }});
             
              
            }
            function xoaTinTuc(idItemTT)
            {
              
               
	            $.ajax({
                        method: "GET",
                        url: "./ajax/xoatintuc.php",
                         data: { idTT: idItemTT},
                         success: function(result){
                            $("#kqtt").html(result);
            }});
            }
            
            function thayDoiXuLy(ob)
            {
                var value = ob.value
                var r = confirm("Bạn có chắc chắn thay đổi không! mọi dữ liệu sẽ");
               if (r == true) {
                
                if(value==0)
                {
                    $("#ngaylam").val('');
                    $("#giolam").val('');
                }
            }
           
       
    } 
       
    function loadKyNang()
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/loadkynangnhanvien.php",
                         data: { idnhanvien:$("#idnhanvien").val()},
                         success: function(result){
                            $("#kqknnv").html(result);
            }});
            }
            function xoaKyNang(iddv,idnv)
            {
               
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoakynang.php",
                         data: { iddichvu:iddv,idnhanvien:idnv},
                         success: function(result){
                            $("#kqknnv").html(result);
            }});
            }       
          
            function xoaYKienKhachHang(idykien)
            {
                var r = confirm("Bạn có muốn xóa không");
               if (r == true) {
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoaykienkhachhang.php",
                         data: { idykienkhachhang:idykien},
                         success: function(result){
                            $("#ykkh").html(result);
            }});
               }
               
            }   
            function xoaNhanVien(idnv)
            {
                var r = confirm("Bạn có muốn xóa không");
               if (r == true) {
                $.ajax({
                        method: "GET",
                        url: "./ajax/xoanhanvien.php",
                         data: { idnhanvien:idnv},
                         success: function(result){
                            $("#dsnv").html(result);
            }});
               }
               
            }   
          

              function timKiemNhanVien()
            {
                var strNhanvien = $('#txtTimKiemNV').val();
                $.ajax({
                        method: "GET",
                        url: "./ajax/timkiemnhanvien.php",
                         data: { tutimkiem:strNhanvien},
                         success: function(result){
                            $("#dsnv").html(result);
            }});
               
            }   
$(document).ready(function() {
    $("#faq_search_input").keyup(function()
    {
       
        var faq_search_input = $(this).val();           // Lấy giá trị search của người dùng
        var dataString = 'keyword='+ faq_search_input; 
          // Lấy giá trị làm tham số đầu vào cho file ajax-search.php
       
            $.ajax({
                method: "GET",                              // Phương thức gọi là GET
                url: "./ajax/timkiemtendichvu.php",                  // File xử lý
                data: dataString,                        // Dữ liệu truyền vào
                success: function(server_response)        // Khi xử lý thành công sẽ chạy hàm này
                {
                    $('#kqdv').html(server_response).show();      // Hiển thị dữ liệu vào thẻ div #searchresultdata
                      // Hiển thị giá trị search của người dùng
                    
                   
                }
            });
             // Không chuyển trang
    });
  
    $("#timkiemsanpham").keyup(function()
    {
       
        var faq_search_input = $(this).val();           // Lấy giá trị search của người dùng
        var dataString = 'keyword='+ faq_search_input; 
          // Lấy giá trị làm tham số đầu vào cho file ajax-search.php
       
            $.ajax({
                method: "GET",                              // Phương thức gọi là GET
                url: "./ajax/timkiemtensanpham.php",                  // File xử lý
                data: dataString,                        // Dữ liệu truyền vào
                success: function(server_response)        // Khi xử lý thành công sẽ chạy hàm này
                {
                    $('#kqsp').html(server_response).show();      // Hiển thị dữ liệu vào thẻ div #searchresultdata
                      // Hiển thị giá trị search của người dùng
                    
                   
                }
            });
             // Không chuyển trang
    });
    $("#tktenkhachangdatsp").keyup(function()
    {
       
        var faq_search_input = $(this).val();
           // Lấy giá trị search của người dùng
        var dataString = 'keyword='+ faq_search_input; 
          // Lấy giá trị làm tham số đầu vào cho file ajax-search.php
       
            $.ajax({
                method: "GET",                              // Phương thức gọi là GET
                url: "./ajax/timkiemtenkhachhangdatsp.php",                  // File xử lý
                data: dataString,                        // Dữ liệu truyền vào
                success: function(server_response)        // Khi xử lý thành công sẽ chạy hàm này
                {
                    $('#kqddsp').html(server_response).show();      // Hiển thị dữ liệu vào thẻ div #searchresultdata
                      // Hiển thị giá trị search của người dùng
                    
                   
                }
            });
             // Không chuyển trang
    });
    $("#tkdondatdichvu").keyup(function()
    {
       
        var tkdondatdichvu_input = $(this).val();           // Lấy giá trị search của người dùng
        var dataString = 'tenkh='+ tkdondatdichvu_input; 
          // Lấy giá trị làm tham số đầu vào cho file ajax-search.php
       
            $.ajax({
                method: "GET",                              // Phương thức gọi là GET
                url: "./ajax/timkiemdatichvu.php",                  // File xử lý
                data: dataString,                        // Dữ liệu truyền vào
                success: function(server_response)        // Khi xử lý thành công sẽ chạy hàm này
                {
                    $('#kqddv').html(server_response).show();      // Hiển thị dữ liệu vào thẻ div #searchresultdata
                      // Hiển thị giá trị search của người dùng
                    
                   
                }
            });
             // Không chuyển trang
    });
    });

    </script>

</body>
</html>