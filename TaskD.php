<?php
//Part D — Access Modifiers
//creating class
class BankAccount{
    //properties
    public $ownerName;
    private $balance;
    //constructor
    function __construct($ownerName,$balance){
        $this->ownerName=$ownerName;
        $this->balance=$balance;
    }
    //show balance method
    function showBalance(){
        echo "Owner:".$this->ownerName."<br>";
        echo "Balance:".$this->balance."<br>";
    }
    
}
//object of the class
$account1=new BankAccount("Ahmad",5000);
//call showBalance method
$account1->showBalance();


// Try This
// After running the program successfully, try:
// echo $account1->balance;
// Question
// Does it work?

// Answer: No
// Why?
//Because: the access type of $balance property is private which
//means this property is only accessable inside it's own class
//and can't be accessed outside of it's class.
?>