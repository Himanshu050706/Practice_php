<?php
class Counter
{
    public static $objectsCreated = 0;

    public function __construct()
    {
        self::$objectsCreated++;
    }
}

$first = new Counter();
$second = new Counter();
echo Counter::$objectsCreated . "<br>"; 

$third= new Counter();
echo Counter::$objectsCreated; 


?>