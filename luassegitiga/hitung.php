<?php

/*$alas = $_GET['alas'];
$tinggi = $_GET['tinggi'];
    function LuasSegitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        echo "<h1>Luas segitiga adalah : $luas </h1>";
    }
    
    LuasSegitiga($alas, $tinggi);
    */
?>

<?php
$alas = $_GET['alas'];
$tinggi = $_GET['tinggi'];
    function penjumlahan($alas, $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        return $luas;

    }

    echo penjumlahan ($alas, $tinggi);

