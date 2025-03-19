<?php


require_once "utils.php";


generateTitle("-- localscope", 'red',1);

# any variable defined inside a fuction
# its scope is local , cannot be accessed outside the function
/**
 *
 */

function sayhi(){
    $name=  'Ahmed';
    echo "<p> Hello {$name} </p>";
}

sayhi();
var_dump($name); # null --> undefined variable

$x = null;
var_dump($x);

/*
 * display errors and warning
 * */



generateTitle("parameter scope");

function sumnum($num1, $num2){
    # num1 , num2 are paremeters variable --> like local variable
    # can be accessed only inside the function.

    $result= $num1 + $num2;
    echo $result;
}

sumnum(1, 2);

var_dump($num1);

#######################################
generateTitle("Global scope", "green", 1);


/*
 *
 * any variable defined inside the php file --> variable with
 * global scope
 * */

$course = "PHP";

var_dump($course);

$course= "PHP With OOP";
var_dump($course);
# can be accessed any where in the script ??

#### access global variables
generateTitle("Accessing global variable 
        from inside the function", "blue", 2);


    function printCourse(){
        # I need to tell the interpreter plz, take the global
        global $course;
        echo "<h4> The course {$course}</h4>";
    }
    printCourse();

#### scope --> static scope

generateTitle("Static scope", "orange", 1);

    function mycv(){
        $count = 0;
        $count +=1 ;
        echo "the function called <span style='color: red'>
            $count</span> <br>";
    }

    mycv();
    mycv();
    mycv();

    // ask the function to keep counter not to be destroyed
    // introduce static  ---? ? with function
    generateTitle("----", "blue", 2);
    function mycvupdate(){
        static $count = 0;  # this value will not be destroyed
        # after the function ends
        $count +=1 ;
        echo "the function called <span style='color: red'>
                $count</span> <br>";
    }

    mycvupdate();
    mycvupdate();
    mycvupdate();
    mycvupdate();

##################################################


generateTitle("SuperGloblas",  'green', 1);

/**
 * 1- constants  ==> constant --> can be accessed anywhere
 * without limitations
 *
 * 2- superglobal variables like $_POST, $_GET, $_REQUSET
 * $_SERVER , $_SESSION
 */

# 1- to define a constant
# constant name doesn't start with $
define("abc", 19);

var_dump(abc);
echo "<br>";
const track = "PHP";

echo track;

function test(){
    echo "<br> from inside the function ";
    echo track;
    echo "<br>";

    print_r($_REQUEST);
}


test();









drawlines();
?>

<div>
    <h1> <?php echo $course;  ?> </h1>
</div>

























