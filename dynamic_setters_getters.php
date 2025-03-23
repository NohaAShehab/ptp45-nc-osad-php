<?php


require_once 'utils.php';

generateTitle("Dynamic Setters");

/// oop --> all objects from the same classes
/// must have the same properties.
// loosely dynamically typed lang.
// php support update object in the runtime

//class Student{
//
//
//}
//$s = new Student();
//$s->name="Ahmed";
//print_r($s);
//
//$s2 = new Student();
//$s2->email="ahmed@gmail.com";
//
//print_r($s2);





generateTitle("__set, __get");
class Person{
    function __set($name,$value){
        # reach oop principle
//        $this->$name=$value;
        throw new Exception("We cannot set $name with $value");
    }
    function __get($name){
        return $this->$name;
    }
}

$p = new Person();
print_r($p);

$p->__set("name","John Doe");

print_r($p);























/*
 *  class User common properties  --> one user manger  manager=true
 *                                --> one user admin  admin=true
 *
 * class Employee{}
 *
 * class Manager extends Employee{}
 * class Admin extends Employee{}
 *
 * */








