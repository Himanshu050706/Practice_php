<?php

class InvalidWithdrawalException extends Exception
{
}

try {
    throw new InvalidWithdrawalException("Invalid withdrawal.");
} catch (InvalidWithdrawalException $e) {
    echo $e->getMessage();
}

?>