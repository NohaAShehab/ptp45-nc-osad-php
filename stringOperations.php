<?php

require_once 'utils.php';

generateTitle("---trim---");

$text = "\t\tThese are a few words :) ...";
var_dump($text);
$trimmed = trim($text, "\t ehT");
var_dump($trimmed);
# trim chars from beginning and the end




generateTitle("special formatting ");


$bio = "My name is Noha
I works at ITI
I lives in Mansoura.";

echo $bio;
// I need to tell it keep white spaces
brk();
echo nl2br($bio);

////


generateTitle("Special format", "blue");
$txt="welcome to day3 in php";
printf("[%'#10s]\n",$txt);

brk();
printf("[%'$10s]\n","noha");


brk();
$c = 97;
printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function

brk();
printf("%%b = '%b'\n", $c); // print the ascii character, same as chr() function



generateTitle("sprinf");
$num = 5;
$location = 'tree';
$template = 'There are %d monkeys in the %s';
echo sprintf($template, $num, $location);
brk();

echo sprintf($template, 100, "cave");

brk();
echo sprintf("%d %s", 100, "cave");

################

generateTitle("Formatting string to storage");

$question = "what's your name what's your name what's your name";
# postgres --> 'what's your error'
# I need to say ' is part of mystring \ => escape char

$res = addslashes($question);
var_dump($res);

# remove slashes

var_dump(stripcslashes($res));




##################################################
generateTitle("String tokenizer", "red");
echo "<pre>";
$string = "My name is Noha, I works at ITI";
var_dump($string);
$tok = strtok($string, " ");
var_dump($tok);
# name is Noha, I works at ITI .???

var_dump($string);

while ($tok !== false) {
    echo "Word=$tok<br/>";
    $tok = strtok(" \n\t");
    # where is the string that should be divided into tokens

}

var_dump($tok);












#################################3
generateTitle("string comparning", "pink");

$var1 = "helloAhmed";
$var2 = "hello";
# strcmp case sensitive
var_dump(strcmp($var1, $var2));
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in
a case sensitive string comparison';
}



########################################
generateTitle("string replace");


$input = array('A: Abasss', 'B: XXX$', 'C: XXX#');
echo implode('; ', $input);
brk();
$input=substr_replace($input, 'YYY', 3, 3);
var_dump($input);
echo implode('; ', $input);







generateTitle("regular expression");

$email='nshe-hab@iti.gov.eg';
$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
var_dump(preg_match($pattern, $email));
if(preg_match($pattern,$email)){
echo "<br>".'well formed';
}else{
echo "<br>".'not well formed';
}






generateTitle("=====================");
$str = "The rain in SPAIN falls mainly on the plains.";
#pattern inside // , i for ignoring case
$pattern = "/ain/i";
if(preg_match_all($pattern, $str, $matches)) {
    print_r($matches);
}























drawlines();;












