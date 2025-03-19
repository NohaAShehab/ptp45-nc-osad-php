<?php


require_once "utils.php";

generateTitle("define variable", "blue", 1);


# 1-define variable
// php is loosely dynamically type lang
// no need to define the data type of variable
// interpreter detect data type in the runtime

// to define variable $variablename
$name = "Ahmed";
echo $name;

$num = 10 ;
echo $num;
// get type of variable
# 1- use var_dump

var_dump($num);
var_dump($name);


# concat the string

$fname='noha';
$lname = 'shehab';

$fullname = $fname.' '.$lname; # . ---> concat

var_dump($fullname);


$fullname2 = "{$fname} {$lname}";  # double qouted string --> php can parse its content
var_dump($fullname2);

$fullname3 = '{$fname} {$lname}'; # value in the string as it is .
var_dump($fullname3);



# if you are writing only php scripts inside the php file
# no need to close the php tag

generateTitle("Arrays");

$arr = [34,424,4,"js", "php", 234.23];  # index --> start form 0

var_dump($arr);
# var_dump --> Dumps information about a variable value , datatypes

//echo $arr;  # echo => print value of variable if it could be represented into
# a string


print_r($arr); # print the array in human readable view

generateTitle("identifiers");


$name = "Ahmed";
$Name = "Rahma";

var_dump($name);
var_dump($Name);




?>

<div>
    <footer class="footer"> copyrigth@iti.nc.45</footer>
</div>













