<?php

​$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;
​
for ($k=0; $k<$kates; $k++){
    for ($s=0; $s<$sunys; $s++){
        if (rand(0, 1)){
            $katasuniai++;
            break;
        }
    }
}
​
$h1 = 'Katasuniu iseiga';
$h2 = "Dalyvano sunu: $sunys, kaciu: $kates";
$h3 = "Gavosi katasuniu $katasuniai";

​?>
