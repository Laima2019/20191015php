<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($k = 0; $k < $kates; $k++) {
    for ($s = 0; $s < $sunys; $s++) {
        if (rand(0, 1)) {
            $katasuniai++;
            break;
        }
    }
}

$h1 = 'Katasuniu iseiga';
$h2 = "Dalyvavo sunu: $sunys, kaciu: $kates";
$h3 = "Gavosi katasuniu $katasuniai";

//kita uzduotis
$month = 12;
$wallet = 1000;
$month_income = 700;
$month_expenses = [rand];

for ($m = 0; $m <= $month; $m++){ 
$wallet += $month_income - rand(300, 650);
}
            
            
//    for ($w = 1000; $w <= $wallet; $i += $e) {
//        if (rand()) {
//            $wallet[$mi][''] = me(000000, 999999);
//            
//            $walletforecast++;

$h3 = 'Wallet forecast';
$h4 = "po $month menesiu prognozuojamas likutis:$wallet";
?>