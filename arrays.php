<?php

require_once "utils.php";

generateTitle("Arrays", 'red');

$arr=[3,5,"Application",True,"PHP"];
$arr1= array("Noha","Engineering","ITI",
    ["PHP", "Laravel", 'Mongo', "Django"]);

print_r($arr);
print_r($arr1);


brk();
echo $arr1[3][2];



### get no of elements in array
brk();
var_dump(count($arr1));

###############33





###############################
generateTitle("using ranges", "orange");
# Create an array containing a range of elements
$items = range(1, 10, 1);
print_r($items);

$items = range(1, 10, 2);
print_r($items);

$items = range(100, 10, -10);
print_r($items);


$items = range("a", "z", 3);
print_r($items);


## ranges vs generators  (PHP, Python, Ruby)

#############################################

generateTitle("Arrays are mutable ");

# Arrays is mutable datatype

$std_info =[
    "name" =>"Rahma",
    "city" =>"Nasr city",
    "age" => 24,
    "faculty" => 'Science'];

print_r($std_info);

$std_info["salary"]= 2000;
print_r($std_info);

$std_info["name"]= "Rahma Mustafa";
print_r($std_info);
##############################################3
generateTitle("compact", "brown");


$email  = "noha@gmail.com";
$track  = "OSAD";

$info = compact("email", "track");
print_r($info);



####################################





generateTitle("union Arrays");
$num=[2,4,6,8,10];
$alphas=["a","b","c","d"];
$arr3= $num+$alphas;
print_r($arr3);


generateTitle("check this", "blue", 3);
$num=[2,4,6,8,10];
# union indices not exists in the first array
$alphas=["a","b","c","d", "e", "f", "g", "h", "i", "j", "k", "l", "m"];
$arr3= $num+$alphas;
print_r($arr3);







################ Sorting The Array

generateTitle("Sorting array", "green", 1);
$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman",
    100, 1, -10, true, ['ahmed', "Mostafa"] );
sort($names); // returns with the are sorted ascending.
print_r($names);

# sort the array in same variable --> sort according to values

$prices = array( "meat"=>100, "sugar"=>10, "tea"=>800 );
//sort($prices); # ignore keys , sort by values
//print_r($prices);


######################################################
generateTitle("sort associative array", "green", 1);

asort($prices);   # sort by values and keys kept.
print_r($prices);

# sort by key ??
$prices = array( "meat"=>100, "sugar"=>10, "tea"=>800 );

ksort($prices);
print_r($prices);


###############################################3

generateTitle("Array Walk", "Red");

$fruits = ['banana', 'apple',"Kiwi","Orange"];
foreach ($fruits as $fruit) {
    echo "[{$fruit}]<br>";
}

// functions --> need to apply to array


function print_fruits($value){
    echo "<li> firut is  =  $value </li>";
}
//
array_walk($fruits,"print_fruits");
# apply callback function on each element in the array


#####################
generateTitle("Array Merge");

$arr = [32,434235, 24];
$arr2 = ["ahmed", "mostafa", "rahama"];

$res = array_merge($arr, $arr2);
print_r($res);




###################################

generateTitle("Array Map");

$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman");

function Convertoupper($element){
    return strtoupper($element);
}

$newArray = array_map("Convertoupper", $names);
print_r($newArray);


$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];
$result=array_map(function($instructor, $course) {
            return "$instructor teaches $course <br>";
        }, $instructors, $courses);
var_dump($result);








# ###################

generateTitle("Check this", "red");
$arr = array('a' => 123, 'b' => 213, 'c' => 321);

# allowed keys

$allowed_keys = ["a", "c"];


//foreach ($arr as $k => $v) {
//    if (in_array($k, $allowed_keys)) {
//        echo "[{$k}] => {$v}<br>";
//    }
//}

### array_intersect key ??
$flipped_allowed = array_flip($allowed_keys);
print_r($flipped_allowed);
print_r($arr);

$passed_data = array_intersect_key($arr, $flipped_allowed);
print_r($passed_data);




























































































































drawlines();