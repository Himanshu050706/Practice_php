<?php

trait AA
{
    public function abc()
    {
        echo "Main class <br>";
    }
}

class BB
{
    use AA;

    public function de3f()
    {
      echo "this class BB and use Class AA using use word <br>" ;
    }
}

class CC
{
    use AA;

    public function ghi()
    {
       echo "this class CC and use Class AA using use word <br>";
    }
}

// Example usage
$userService = new BB();
$userService->abc();
$userService->de3f();

$orderService = new CC();
$orderService->abc();
$orderService->ghi();

?>