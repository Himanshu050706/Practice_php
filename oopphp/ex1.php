<?php
class Student{
    public $name;
    public $age;
    public $rollno;

    function __construct($name,$age,$rollno){
        $this->name = $name;
        $this->age = $age;
        $this->rollno = $rollno;
    }

    function display(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Roll No: ".$this->rollno."<br>";
    }
}
$a = new Student("Himanshu", 20, 101);
$a->display();

?>