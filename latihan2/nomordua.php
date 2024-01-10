<?php
$nama = "<h3>Salma Aisyah</h3> ";
echo "$nama";
echo "=======================<br/>";
echo "Nama Lengkap : Salma Aisyah<br/> ";

$nilaiHarian = 95*30/100;
$nilaiUts = 85*30/100;
$nilaiUas = 90*30/100;

$nilaiAkhir = $nilaiHarian + $nilaiUts + $nilaiUas;


echo "Nilai Harian : $nilaiHarian <br/>";
echo "Nilai UTS : $nilaiUts<br/>";
echo "Nilai UAS : $nilaiUas<br/>";
echo "Nilai Akhir : $nilaiAkhir<br/>";

if($nilaiAkhir >= 90  &&$nilaiAkhir <=100){
    echo "Predikat Nilai :  A+";
}else if($nilaiAkhir >= 85  &&$nilaiAkhir <=89){
    echo "Predikat Nilai : A";
}else if($nilaiAkhir >= 80  &&$nilaiAkhir <=84){
    echo "Predikat Nilai : B+";
}else if($nilaiAkhir >= 76  &&$nilaiAkhir <=79){
    echo "Predikat Nilai : B";
}else if($nilaiAkhir >= 60  &&$nilaiAkhir <=75){
    echo "Predikat Nilai : C";
}else if($nilaiAkhir >= 40  &&$nilaiAkhir <=59){
    echo "Predikat Nilai : D";
}else if($nilaiAkhir >= 0  &&$nilaiAkhir <=39){
        echo "Predikat Nilai : E";
 }else {
    echo "anda tidak mendapatkan predikat";
 }







?>