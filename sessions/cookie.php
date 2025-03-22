<?php


var_dump($_COOKIE);
echo "<br>";
setcookie("name", "need break", time() + 60, "/");

var_dump($_COOKIE);