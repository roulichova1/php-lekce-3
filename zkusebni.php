<?php

$vek = 20;
if ($vek < 18) {
   echo 'Vstup pouze pro starší 18 let.';
}


$stav = 'rozbaleno';
if ($stav == 'vyzkoušeno' && $stav = 'rozbaleno') {
     echo 'Zboží je téměř nové';
}


$barva = 'žlutá';
if ($barva == 'modra') {
   echo 'blue';
} elseif ($barva == 'zelena') {
   echo 'green';
} elseif ($barva == 'cervena') {
   echo 'red';
} else echo 'jiná barva';

echo '<br>';
echo '<br>';

$dny =  ['pondělí', 'úterý', 'středa'];
foreach ($dny as $den) {
   echo $den;
   echo ', ';
}

echo '<br>';
echo '<br>';

$udaje = ['jmeno' => 'Luděk', 'prijmeni' => 'Veselý'];
foreach ($udaje as $klic => $hodnota) {
   echo $klic;
   echo ': ';
   echo $hodnota;
   echo '<br>';
}


// uložení cookie na 1 hodinu (3600sec)
setcookie('user', 'John', time() +3600);

// zobrazení všech cookie
var_dump($_COOKIE);


