<?php
$bilangan = $_GET['bilangan'];


echo "<h3>Nama : I Putu Tangkas Aryadharma</h3>";
echo "<h3>NIM : 2301010067</h3>";
echo "Deret Maju: ";
$i = 1;
do {
    echo "$i ";
    $i++;
} while ($bilangan >= $i);

// Deret mundur
echo "<br>Deret Mundur: ";
$i = $bilangan;
do {
    echo "$i ";
    $i--;
} while ($i >= 1);
?>
