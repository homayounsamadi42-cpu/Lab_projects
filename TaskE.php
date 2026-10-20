<?php
//Part E — Simple Inheritance
//creating parent class
class Person{
    public $name;
    //constructor
    function __construct($name){
        $this->name=$name;
    }
    //method
    function introduce(){
        echo "My name is $this->name <br>";
    }
}

//child class
class Student extends Person{
        function study(){
            echo "$this->name is studying.";
        }
    }
$student1=new Student("Ahmad");
$student1->introduce();
$student1->study();

?>