<?php
const PHI = '3.14';
function rumusSegitiga(int $alas, int $tinggi){
    return (0.5*$alas*$tinggi);
}
function rumusPersegiPanjang(int $panjang, int $lebar){
    return $panjang * $lebar;
}
function rumusLingkaran(int $jariJari){
    return PHI * $jariJari*$jariJari;
}

if(isset($_POST))
{
    $rumus = $_POST['rumus'];
    switch($rumus){
        case 'segitiga':
            $hasil = rumusSegitiga($_POST['alas'],$_POST['tinggi']);
            break;
        case "persegi_panjang":
            $hasil = rumusPersegiPanjang($_POST['panjang'],$_POST['lebar']);
            break;
        case "lingkaran" :
            $hasil = rumusLingkaran($_POST['jari_jari']);

    }

    echo "Luas Nya ". $_POST['rumus']." Adalah ".$hasil ?? '';
    
}