<?php 

// Multi level inheritance
class BankAccount
{
    public $accountHolder;
    public $accountNumber;
    private $pincode;
    protected $ATM;




    public function __construct()
    {   
        // $this->accountHolder;
        // $this->accountNumber;
        // $this->pincode;
        // $this->ATM;
        echo "Your Account has been created!";

    }





}


class MeezanBank extends BankAccount
{

   function __construct($accountHolder, $accountNumber){
    parent::__construct();
    $abc = $accountHolder;
    $this->accountNumber = $accountNumber;

  }


    // public function getAtm(){
    //    echo $this->ATM;
    // }
    
}
class BankAlfalah extends BankAccount
{
    function __construct($pincode, $ATM){
        parent::__construct();
    
      }
}



// $asfarAccount1 = new MeezanBank('Asfar Ahmed',73289748238,3343, 6734267232342341);
// $asfarAccount2 = new BankAlfalah('Asfar Ahmed',948239843234,4343, 9087327732432);

$asfarAccount1 = new MeezanBank('Asfar Ahmed',73289748238);
$asfarAccount2 = new BankAlfalah(6767,948239843234);


// echo $asfarAccount->pincode;
// echo "<br>";
// echo $asfarAccount->accountNumber;

echo "<br>";
// echo $asfarAccount1->getAtm();
echo "<br>";
// echo $asfarAccount2->accountHolder;
// echo $asfarAccount->accountNumber;



echo $asfarAccount1->accountHolder;
echo "<br>";
echo $asfarAccount1->accountNumber;
echo "<br>";

// echo $asfarAccount2->pincode;
// echo "<br>";
// echo $asfarAccount2->ATM;
// echo "<br>";











?>