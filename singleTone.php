<?php


require_once "utils.php";
class Student{

    public $name;
    private static $count = 0;
    private function __construct($name){
        # $this --> refers to object address in memory
        if(self::$count == 0) {
            $this->name = $name;
            self::$count++;
        }else{
            throw new Exception("There is already one object");

        }

    }

    static function generateOneObject($name){

            return new Student($name);
    }

    // prevent clone

    function __clone(){
        // define what did you to implement when you clone the object
        throw new Exception("Cloning is not supported");
    }


}

//$s = new Student();

$s  = Student::generateOneObject("James");
print_r($s);

//$s2= Student::generateOneObject("James");
//print_r($s2);


$s3 = clone $s;

var_dump($s3);