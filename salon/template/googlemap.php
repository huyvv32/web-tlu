<?php
    $DB->reset();
    $DB->setTable('googlemap');
    $DB->setOrder("idMap desc");
    $DB->setLimit("0,1");
    $DB->select();

    $map= $DB->fetch_array();
?>

<div class="map" style="margin-top: 20px;">
    <?php echo $map['src'];?>
</div>