<?php
 
function luasLingkaran($jari_jari)
{
    $luas = 3.14 * $jari_jari * $jari_jari;
    return number_format($luas, 2);
}

function kelilingLingkaran($jari_jari)
{
    $keliling = 2 * 3.14 * $jari_jari;
    return number_format($keliling, 2);
}

function luasPersegiPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return number_format($luas, 2);
}

for ($i = 1; $i <= 100; $i++) {
    echo "Nomer: $i".PHP_EOL;

    if ($i % 3 == 0) {
        $jari_jari = $i / 3;
        $luasLingkaran = luasLingkaran($jari_jari);
        echo " - Luas Lingkaran: $luasLingkaran".PHP_EOL;
    }

    if ($i % 5 == 0) {
        $jari_jari = $i / 5;
        $kelilingLingkaran = kelilingLingkaran($jari_jari);
        echo " - Keliling Lingkaran: $kelilingLingkaran".PHP_EOL;
    }

    if ($i % 3 == 0 && $i % 5 == 0) {
        $panjang = $i / 3;
        $lebar = $i / 5;
        $luasPersegiPanjang = luasPersegiPanjang($panjang, $lebar);
        echo " - Luas Persegi Panjang: $luasPersegiPanjang".PHP_EOL;
    }

} 
    
?>