<?php


require_once("utils.php");

generateTitle("---- Variable Types ----");

$var1 = 0;
var_dump($var1);
brk();
$var2 = (float)$var1;
var_dump($var2);


generateTitle("---- tips ----");

$name=  "noha";

$name = (int) $name;  # 0
var_dump($name);

///////
brk();

$email ='10noha';
$email = (int) $email;
var_dump($email);



generateTitle("varibale of variable ", "blue", 1);

$iti = "information technology Institute";

echo $iti."<br>";


$loc = "iti";

echo $loc."<br>";

echo $$loc."<br>";

//echo $$$loc;


generateTitle("reference operator");

$a= 10;
$b = $a;  # deep copy --> create new reference

var_dump($a, $b);

$a = 15;

brk();

var_dump($a, $b);


# shallow copy 2 variable refer to the same
# memory location
generateTitle("using reference operator", "black", 3);
brk();
$a  = 10;
$b = &$a;

var_dump($a, $b);

$b = 100;
brk();
var_dump($a, $b);





########################
generateTitle("Execution operator");


$out = `ls -la`;
echo "<pre>".$out."</pre>";





####################
generateTitle("variable functions");
$num="10";
settype($num,"int");
echo gettype($num);








generateTitle("isset, empty", "red", 1);

generateTitle("variable is not defined", "blue", 4);

var_dump(isset($age));  # false
var_dump(empty($age));  # true


generateTitle("variable defined with null", "blue", 4);

$email = null;
var_dump(isset($email));  # false
var_dump(empty($email));  # true


generateTitle("variable defined with false or empty str", "blue", 4);

$email = "";
var_dump(isset($email));  # true
var_dump(empty($email));  # true

generateTitle("variable defined with value", "blue", 4);

$email = "iti";
var_dump(isset($email));  # true
var_dump(empty($email));  # false



///
///  validation on form fields ??
///  check if key received or not /// then value inside the key
///
///
///

generateTitle("---- ");
if(isset($_GET["name"]) and ! empty($_GET["name"])){

    echo "Name found  {$_GET['name']}";
}else{
    echo "Not found";
}







generateTitle("forEach", "red", 2);

$nums = [2,3,4,23,23];
//print_r($nums);


# like hash map # associative array in php
# python  ---> # dict
foreach($nums as $num){
    echo "<li>{$num}</li>";
}

foreach ($nums as $index => $num) {
    echo "<li>{$index}, {$num}</li>";
}

exit;
generateTitle("associative", "red", 2);
$arr =[
    "name"=>"noha",
    "track"=>"OSAD"
];

foreach($arr as $elem){
    echo "<li>{$elem}</li>";
}

foreach($arr as $key=>$value){
    echo "<li>{$key} : {$value}</li>";
}




















































drawlines();






















