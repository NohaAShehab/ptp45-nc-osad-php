<?php

    require_once("utils.php");
    generateTitle("Closures and classes");


    class Employee{
        public $name;

        function __construct($name){
            $this->name = $name;
        }
    }

    class Student {
        private $name;
        function __construct($name){
            $this->name = $name;
        }
    }


    class Manager {
        public $name;
        function __construct($name){
            $this->name = $name;
        }
    }


    $emp = new Employee("Ahmed");
    $manager = new Manager("Ali");
    $student = new Student("Rahma");

    print_r($emp);
    brk();
    print_r($manager);
    brk();
    print_r($student);


    $formatNameClosure =function(){
        echo "<h3 style='color: purple'> {$this->name}</h3>";
    }; // called by object



    $res = $formatNameClosure->bindTo($emp);
    var_dump($res);
    $res();


    $formatNameClosure->bindTo($manager)();
    // you can bind the closure to the object ??

    // function print name with format



    // bind closure to the student object
//
//$res = $formatNameClosure->bindTo($student);
//var_dump($res);
//$res();


// php --> violate object encapsulation
generateTitle("Scope binding ");

$res = $formatNameClosure->bindTo($student, Student::class);
$res();

generateTitle("using call function ");
// from php 7

// instead clourse bind to object then --> redeclare scope

$formatNameClosure->call($student);
# clousure-> call --> access object properties regardless of the scopes







generateTitle("Define closure inside the class");



class Machine {

    private $name='car';
    function startWroking(){
        echo 'Machine started working now .........<br>';
        # return with action --> can be called or not
        return function(){
            echo '----this step 2 from the function';
        };
    }

    function printName(){
        echo "name= {$this->name}";
        return function(){
            # access private members
            echo "<br>".strtoupper($this->name);
        };
    }
}


$machine = new Machine();
$res=$machine->startWroking();
//var_dump($res);
$res();// you are free to run this or not.
brk();
$machine->printName()();



drawlines();




































