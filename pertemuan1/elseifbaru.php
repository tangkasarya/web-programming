<?php
$nilai = ;

if ($nilai >= 1 && $nilai <= 60) {
    echo "D";
} elseif ($nilai >= 61 && $nilai <= 75) {
    echo "C";
} elseif ($nilai >= 76 && $nilai <= 90) {
    echo "B";
} elseif ($nilai >= 91 && $nilai <= 100) {
    echo "A";
} else {
    echo "Error: Nilai harus berada di antara 1 dan 100.";
}
?>
