<?php 
$nama = "agus setiawan";
$jamker = 150;
$kerja = 180;
$jamlembur = $kerja - $jamker;
$gol = "B";

switch ($gol) {
    case 'A':
       $upah = 5000;
        break;
    case 'B':
       $upah = 6000;
        break;
    case 'C':
       $upah = 7500;
        break;
    default:
       $upah = 9000;
        break;
}
    if ($kerja > 150) {
        $persen = 0.25 * $upah;
        $upahlembur = $upah + $persen;
        $gajilembur =$jamlembur * $upahlembur;
        $gaji = 4jamker * $upah;
        $gb = $total * 4;
    } else {
        $gaji = $jamker * $upah;
        $gb - $gaji * 4;
        $total = 0;
    }

    echo "string";
    echo "string";
    echo "string";
 ?> 