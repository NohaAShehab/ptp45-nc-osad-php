<?php


require_once 'utils.php';


generateTitle("----");


//function sumnum($a, $b) {
//    var_dump($a, $b);
//}
//sumnum(1, 2);
//
//sumnum("iti", "osad");




generateTitle("restrict datatype");

function sumnum(int $a, int $b) {
    var_dump($a, $b);
}
sumnum(1, 2);

sumnum("iti", "osad");











