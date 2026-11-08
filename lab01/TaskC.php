<?php
//Part C — Create Another Object
// class
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
    //class method
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
$student2=new Student("Sara",1002,"Information Systems");
//call the method
// $student1->sayHello();
// $student1->showInfo();
$student2->showInfo();


// Question
// How many classes did you create?
// Answer: 1 class(Student)
// How many objects did you create?
// Answer: 2 objects(student1 and student2)
?>