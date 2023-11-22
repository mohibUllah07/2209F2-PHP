<?php 


    // Inheritance
    // Abstraction
    // Polymorphism
    // Encapsulation










    class BankAccount 
    {


    public $accountHolder;
    public $accountNumber;
    private $pincode;
    static $bankName = 'Meezan Bank';


    public function __construct($accountHolder, $accountNumber, $pincode)
    {
        $this->accountHolder = $accountHolder;
        $this->accountNumber = $accountNumber;
        $this->pincode = $pincode;
    }

    }


    $asfarAccount = new BankAccount('Asfar Zahid', 32789478234189, 2343);

    // echo $asfarAccount->pincode;

    print_r($asfarAccount);
    echo "<br>";

    echo BankAccount::$bankName;




?>