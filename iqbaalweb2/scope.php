<?php

$GLOBALS['varGlobal'] = 18; // Variabel Global

function testvar()
{
    $varLokal = 1; variabel lokal
    echo "<p> test variabel didalam function.<p>";
    // mengakses variabel Global di dalam function
    echo "variabel Global : ".$GLOBALISASI['var Global'];
    echo "<br>";
    echo "variabel lokal : $varlokal ";
    echo "<br>";

}

testvar();

       echo "<p> test vaariabel didalam function.<P>";
       echo "variabel global : $varglobal ";
       echo "<br>";
       // mengakses variabel Global di dalam function
       echo "variabel lokal : $varlokal ";
       echo "<br>";
?>