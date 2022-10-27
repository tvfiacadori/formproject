<?php

for($i = 0; $i <= 10; $i++) {
echo "9 x $i = ".($i*9)."<br>";
}

#Funções para Strings

//strtoupper
$name = "cloe flamin";
$newname = strtoupper($name);

echo $newname;

echo "<br>";
echo "<hr>";

//strtolower

$name = "CLOE FLAMIN";
$newname = strtolower($name);
echo $newname;

echo "<br>";
echo "<hr>";

//substr -> retorna uma parte da string apartir do numero que colocar
$msg = "Hello world";
echo substr($msg, 3);

echo "<br>";
echo "<hr>";

//str_pad
$obj = " mouse";
$newobj = str_pad($obj, 12, "mickey", STR_PAD_LEFT);
echo $newobj;

echo "<br>";
echo "<hr>";

//str_repeat


//strlen
//str_replace
//strpos