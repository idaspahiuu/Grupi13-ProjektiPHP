
<?php
include("fv.php");

include("avocado.html");
$avocado = new fv();
$avocado->__set("lloji", "vegetable");
$avocado->__set("emri", "avocado");
$avocado->__set("ngjyra", "green");
echo $avocado->__get("lloji").$avocado->__get("emri").$avocado->__get("ngjyra")."<br>";

include("broccoli.html");
$broccoli = new fv();
$broccoli->__set("lloji", "vegetable");
$broccoli->__set("emri", "broccoli");
$broccoli->__set("ngjyra", "green");
echo $broccoli->__get("lloji").$broccoli->__get("emri").$broccoli->__get("ngjyra")."<br>";

include("cabbage.html");
$cabbage = new fv();
$cabbage->__set("lloji", "vegetable");
$cabbage->__set("emri", "cabbage");
$cabbage->__set("ngjyra", "green");
echo $cabbage->__get("lloji").$cabbage->__get("emri").$cabbage->__get("ngjyra")."<br>";

include("corn.html");
$corn = new fv();
$corn->__set("lloji", "vegetable");
$corn->__set("emri", "corn");
$corn->__set("ngjyra", "yellow");
echo $corn->__get("lloji").$corn->__get("emri").$corn->__get("ngjyra")."<br>";

include("cucumber.html");
$cucumber = new fv();
$cucumber->__set("lloji", "vegetable");
$cucumber->__set("emri", "cucumber");
$cucumber->__set("ngjyra", "green");
echo $cucumber->__get("lloji").$cucumber->__get("emri").$cucumber->__get("ngjyra")."<br>";

include("grape.html");
$grape = new fv();
$grape->__set("lloji", "fruit");
$grape->__set("emri", "grape");
$grape->__set("ngjyra", "green");
echo $grape->__get("lloji").$grape->__get("emri").$grape->__get("ngjyra")."<br>";

include("kiwi.html");
$kiwi = new fv();
$kiwi->__set("lloji", "fruit");
$kiwi->__set("emri", "kiwi");
$kiwi->__set("ngjyra", "brown");
echo $kiwi->__get("lloji").$kiwi->__get("emri").$kiwi->__get("ngjyra")."<br>";

include("onion.html");
$onion = new fv();
$onion->__set("lloji", "vegetable");
$onion->__set("emri", "onion");
$onion->__set("ngjyra", "white");
echo $onion->__get("lloji").$onion->__get("emri").$onion->__get("ngjyra")."<br>";

include("pineapple.html");
$pineapple = new fv();
$pineapple->__set("lloji", "fruit");
$pineapple->__set("emri", "pineapple");
$pineapple->__set("ngjyra", "yellow");
echo $pineapple->__get("lloji").$pineapple->__get("emri").$pineapple->__get("ngjyra")."<br>";

include("potato.html");
$potato = new fv();
$potato->__set("lloji", "vegetable");
$potato->__set("emri", "potato");
$potato->__set("ngjyra", "brown");
echo $potato->__get("lloji").$potato->__get("emri").$potato->__get("ngjyra")."<br>";

include("pumpkin.html");
$pumpkin = new fv();
$pumpkin->__set("lloji", "vegetable");
$pumpkin->__set("emri", "pumpkin");
$pumpkin->__set("ngjyra", "yellow");
echo $pumpkin->__get("lloji").$pumpkin->__get("emri").$pumpkin->__get("ngjyra")."<br>";

include("spinach.html");
$spinach = new fv();
$spinach->__set("lloji", "vegetable");
$spinach->__set("emri", "spinach");
$spinach->__set("ngjyra", "green");
echo $spinach->__get("lloji").$spinach->__get("emri").$spinach->__get("ngjyra")."<br>";

include("strawberry.html");
$strawberry = new fv();
$strawberry->__set("lloji", "fruit");
$strawberry->__set("emri", "strawberry");
$strawberry->__set("ngjyra", "red");
echo $strawberry->__get("lloji").$strawberry->__get("emri").$strawberry->__get("ngjyra")."<br>";

include("tomato.html");
$tomato = new fv();
$tomato->__set("lloji", "vegetable");
$tomato->__set("emri", "tomato");
$tomato->__set("ngjyra", "red");
echo $tomato->__get("lloji").$tomato->__get("emri").$tomato->__get("ngjyra")."<br>";

include("watermelon.html");
$watermelon = new fv();
$watermelon->__set("lloji", "fruit");
$watermelon->__set("emri", "watermelon");
$watermelon->__set("ngjyra", "green, black and white");
echo $watermelon->__get("lloji").$watermelon->__get("emri").$watermelon->__get("ngjyra")."<br>";
?>