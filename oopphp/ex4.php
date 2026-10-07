<?php
class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100.50);
$account->withdraw(30);

echo $account->getBalance(); 
?>