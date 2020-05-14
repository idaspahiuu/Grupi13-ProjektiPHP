<?php
include("animals.php");

include('cat.html');
$cat = new animals();
$cat->__set("emri", "cat");
$cat->__set("ngjyra", "black and brown");
echo $cat->__get("emri")."<br>".$cat->__get("ngjyra")."<br>";

include('qeni.html');
$qeni = new animals();
$qeni->__set("emri", "dog");
$qeni->__set("ngjyra", "brown");
echo $qeni->__get("emri")."<br>".$qeni->__get("ngjyra")."<br>";

include('elephant.html');
$elephant = new animals();
$elephant->__set("emri", "elephant");
$elephant->__set("ngjyra", "grey");
echo $elephant->__get("emri")."<br>".$elephant->__get("ngjyra")."<br>";

include('giraffe.html');
$giraffe = new animals();
$giraffe->__set("emri", "giraffe");
$giraffe->__set("ngjyra", "brown");
echo $giraffe->__get("emri")."<br>".$giraffe->__get("ngjyra")."<br>";

include('horse.html');
$horse = new animals();
$horse->__set("emri", "horse");
$horse->__set("ngjyra", "brown");
echo $horse->__get("emri")."<br>".$horse->__get("ngjyra")."<br>";

include('lepuri.html');
$lepuri = new animals();
$lepuri->__set("emri", "rabbit");
$lepuri->__set("ngjyra", "brown");
echo $lepuri->__get("emri")."<br>".$lepuri->__get("ngjyra")."<br>";

include('lion.html');
$lion = new animals();
$lion->__set("emri", "lion");
$lion->__set("ngjyra", "brown");
echo $lion->__get("emri")."<br>".$lion->__get("ngjyra")."<br>";

include('monkey.html');
$monkey = new animals();
$monkey->__set("emri", "monkey");
$monkey->__set("ngjyra", "grey");
echo $monkey->__get("emri")."<br>".$monkey->__get("ngjyra")."<br>";

include('pig.html');
$pig = new animals();
$pig->__set("emri", "pig");
$pig->__set("ngjyra", "pink");
echo $pig->__get("emri")."<br>".$pig->__get("ngjyra")."<br>";

include('pula.html');
$pula = new animals();
$pula->__set("emri", "chicken");
$pula->__set("ngjyra", "white");
echo $pula->__get("emri")."<br>".$pula->__get("ngjyra")."<br>";

include('tiger.html');
$tiger = new animals();
$tiger->__set("emri", "tiger");
$tiger->__set("ngjyra", "brown, black and white");
echo $tiger->__get("emri")."<br>".$tiger->__get("ngjyra")."<br>";

include('zebra.html');
$zebra = new animals();
$zebra->__set("emri", "zebra");
$zebra->__set("ngjyra", "black and white");
echo $zebra->__get("emri")."<br>".$zebra->__get("ngjyra")."<br>";
?>