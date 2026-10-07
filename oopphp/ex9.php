<?php
class User
{
    private string $name;
    private string $email;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$user = new User();
$user->setName("Himanshu");
echo $user->getName() . "<br>"; 
$user->setName("Keval");       
echo $user->getName() ;
?>