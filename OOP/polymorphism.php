<?php 

    // poly -> many
    // morphism -> forms

    interface CompanyAudit{
        public function policiesCheck();

    }

    class HRAudit
    {

       public $policies;
       public $jobDescription;
       public $organoGram;
       public $trainings;
       
       public function __construct($policies, $jobDescription, $organoGram, $trainings)
       {
        $this->policies = $policies;
        $this->jobDescription = $jobDescription;
        $this->organoGram = $organoGram;
        $this->trainings = $trainings;
       }



       public function policiesCheck()
    {
        echo "Safety Policies <br>";
        echo "Payment Policies <br>";
        echo "Employee Performance Policies <br>";
        echo "Confidential Policies <br>";
    }

   

    }
    class AccountsAudit
    {

       public $policies;
       public $jobDescription;
       public $organoGram;
       public $trainings;
       
       public function __construct($policies, $jobDescription, $organoGram, $trainings)
       {
        $this->policies = $policies;
        $this->jobDescription = $jobDescription;
        $this->organoGram = $organoGram;
        $this->trainings = $trainings;
       }



       public function policiesCheck()
    {
        echo "Technology Policies <br>";
        echo "Cash count Policies <br>";
        echo "Descipline Policies <br>";
        echo "Credit Card User Policies <br>";
        echo "Cash Handling Policies <br>";
        echo "Budget Control Policies <br>";
    }

   

    }




    $hrAudit = new HRAudit('HR Policies', 'Full time Job', 'Documentation', '3 months Training');

    // echo $hrAudit->policies;

    $hrAudit->policiesCheck();




    $accountsAudit = new AccountsAudit('HR Policies', 'Full time Job', 'Documentation', '3 months Training');

    // echo $hrAudit->policies;
    echo "<hr>";

    $accountsAudit->policiesCheck();












?>