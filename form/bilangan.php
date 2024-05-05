<?php
	$awal = $_GET['awal'];
    $akhir = $_GET['akhir'];
    
    
    
    if($awal >= $akhir){
    for($i=$awal; $i >= $akhir; $i--){
        echo $i. " ";
    }
    }else {
        echo "bilangan harus lebih besar";
    }
?>
    