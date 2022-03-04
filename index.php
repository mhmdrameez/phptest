<?php

require 'header.php';

$number = array(10,20,3,40);


for($i=0;$i<3;$i++){
    echo $number[$i]."<br>";
}

function abc($abs,$shd){
    echo $abs;
    echo $shd;
   
}

abc(10,20);


array_push($number,30);
print_r($number);
unset($number[0]);
print "<br>";
print "<br>";
var_dump($number);
echo $number[4];
$ar=["name"=>"Tintu","age"=>28];
echo $ar["name"];

print "<br>";
print "<br>";
define("PI",3.14);
echo PI;

$a=10;
$b=22;
$str = "your are is $a";
echo $str;
print "<br>";
print "<br>";
$name = 'Anoop';
echo $name;
print " b is 22 ++b:";
echo ++$b;
print "<br>";
print "a is 10 a++:";






echo $a++;


include 'footer.php';

?>

