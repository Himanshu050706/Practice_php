<?php
class Car
{
    private bool $isRunning = false;

    public function start()
    {
        $this->isRunning = true;
    }

    public function stop()
    {
        $this->isRunning = false;
    }

    public function showStatus()
    {
        if ($this->isRunning) {
            echo "The car is running.<br>";
        } else {
            echo "The car is stopped.<br>";
        }
    }
}

$car = new Car();       
$car->showStatus();     
$car->start();          
$car->showStatus();     
     
?>