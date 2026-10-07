<?php
class Book{
    public $aname;
    public $title;
    public $pyear;

    function __construct($name,$title,$pyear){
        $this->aname = $name;
        $this->title = $title;
        $this->pyear = $pyear;
    }

    function display(){
        echo "Author Name: ".$this->aname."<br>";
        echo "Title: ".$this->title."<br>";
        echo "Publication Year: ".$this->pyear."<br>";
    }
}
$a = new Book("himanshu joshi", "PHP Programming", 2020);
$a->display();

?>