<?php
//Part B -Class with Constructor
//creating the class
class Student{
    //properties
    public $name;
    public $studentId;
    public $department;
    //constructor
    function __construct($name,$studentId,$department){
        $this->name=$name;
        $this->studentId=$studentId;
        $this->department=$department;
    }
    //clss method
    function sayHello(){
        echo "Hello! I am a student.";
    }
    //class method
    function showInfo(){
        echo "Name:".$this->name."<br>";
        echo "student ID:".$this->studentId."<br>";
        echo "Department:".$this->department."<br>";
    }
}
//object
$student1=new Student("Ahmad",1001,"Software Engeenering");
//call the method
// $student1->sayHello();
$student1->showInfo();

?>