<?php
    function cekpengunjung ($nama, $jumlah){
        echo "<br> selamat datang $nama <br>";
        echo "Terimakasih telah berkunjung di web kami";
        echo "Jumlah pengunjung $jumlah <br> <br>";
        if ($jumlah>10){
            echo "Jumlah pengunjung ramai";
        }else{
            echo "Jumlah pengunjung biasa aja";
        }
    }

    cekpengunjung("si anj", 9);
    
