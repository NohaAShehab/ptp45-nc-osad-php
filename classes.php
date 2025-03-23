<?php


require_once 'utils.php';
class Employee {
    public $name;
    public static  $count=0;
    public $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        self::$count++;
        displaySuccess("object created {$name}");
    }


    // apply action when object delete,

    function __destruct() {
        self::$count--;
        displayError("Object is removed {$this->name}");
    }
}


$e = new Employee("John Doe", "2012");

echo "Hello";
brk();
$e2 = new Employee("Ali", "2023");

unset($e);  // call destructor



$e3 = new Employee("Test Doe", "2024");

echo "Total no of objects ". Employee::$count;



drawlines();







##########################

/*
 * exception handling try catch statements
 * prevent application from unexpected exit.
 *
 * */



# the idea of finally ??
/*
try{

    $conn=  new PDO("mysql:host=localhost;dbname=test", "root", "");
}catch(PDOException $e){
    echo $e->getMessage();
}
else
{
    // if no issue ?? --> exexuted
    var_dump($conn);
} finally{
// always executable
    echo "hello";

}

echo "hello";
*/



/*
 *  finally ===> return from function
 * order of execution of finally preceeds  return
 *
 * */




try{

    $conn=  new PDO("mysql:host=localhost;dbname=test", "root", "");
}catch(PDOException $e){
    echo "erorrr heere",$e->getMessage();
    brk();
}
 finally{
// always executable
    echo "hello";

}
























