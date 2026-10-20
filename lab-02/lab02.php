<!-- Task1 -->
 <!-- <?php
class Library{
    const MAX_BOOKS=3;
}
echo "Maximum books allowed: " . Library::MAX_BOOKS;
echo "<br>";
// conts are used to define a constant value that are not changeable during the 
// program execution. in this example, we have a restriction on hte maximum number of 
// books that can be borrowed from the library.
?> -->

<!-- Task2 -->

<?php
class StudentCounter{
    public static $count=0;
    public static function addStudent(){
        self::$count++;
    }
}
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();
echo "Total students: " . StudentCounter::$count;
echo "<br>";
?>


<!-- Task3 -->

<?php
abstract class Vehicle{
    public abstract function start();
}

class Car extends Vehicle{
    public function start(){
        echo "Car engine started";
        echo "<br>";
    }
}
class Bike extends Vehicle{
    public function start(){
        echo "Bike started";
        echo "<br>";
    }
}
$car=new Car();
$bike=new Bike();
$car::start();
$bike::start();
?>
