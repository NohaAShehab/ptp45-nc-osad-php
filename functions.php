<?php


require_once "utils.php";

generateTitle("Functions");

$name = "noha";
var_dump($name);

unset($name);

//var_dump($name);


# void function

/*
 *   function may have mandatory or optional parameters
 *   according to the business needed to be implemented.
 * */
function sumnum($num1, $num2){
    $summ = $num1 + $num2;
    echo $summ;
    return $summ;
}



$res= sumnum(1,2, 4,53,333);  # ignore extra parameters
brk();
var_dump($res);  #

brk();

//try {
//    $res2 = sumnum(3);
//} catch (Exception $ex) {
//    echo $ex->getMessage();
//    echo "hiii";
//}
//
//
//echo "hello";



generateTitle("define function with variable number of arguments -unknown-");


function variadic_func($nonVariadic, ...$args ){
    var_dump($args);
}
//variadic_func("hello");
//
//variadic_func("world", 24,124,3,true, ["we", "e"]);
//
//
//
//



generateTitle("Clousure");

$hiclousure= function ($name){
    echo "Hi {$name}";
};


var_dump($hiclousure);

// map , filter, user-define search

var_dump(is_callable($hiclousure)); # can be called
$track = "php";
var_dump(is_callable($track)); # false


$hiclousure("Ahmed");
brk();
$hiclousure("Fares");
brk();
$hiclousure("Moamen");


/// effect of using clousure vs function on memory php
/// web application --> capabilities ===> still we need to take consideration
/// memory of scripts we write.
#######################

generateTitle("Dynamic closure");

$track= "OSAD";

$updateTrack = function() use($track){  # read value --///
    /// this will not affect the global variable
    echo "closure called {$track}";
    $track = "Update OSAD";  # local change inside the closure
    echo "<br>{$track}:: after update";

};


$updateTrack();
brk();
var_dump($track);



drawlines();

































