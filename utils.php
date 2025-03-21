<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// add all the common functionalities . styles --->

// use bootstrap in all pages

// wirte bootstrap cdn links ??

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

echo "<div class='container'> <pre>";

function generateTitle($title, $color='black', $size=1){
    echo "<hr>";
    echo "<h{$size} style='color:{$color}' class='text-center'> {$title} </h{$size}>";
}


function drawlines(){

    echo str_repeat("<br>",10);
}

function brk(){
    echo "<br>";
}


