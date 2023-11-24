<?php 
// Encapsulation



    class ChatMessages
    {

        private $senderName;
        private $recieverName;

        private $message;


        
        public function __construct($senderName, $recieverName, $message)
        {
            $this->senderName = $senderName;
            $this->recieverName = $recieverName;
            $this->message = $message;
        }

        public function dispalyMessage()
        {
            echo "Hi $this->recieverName! $this->senderName sends you a message:  $this->message";
        }

    }


    

    $firstMessage = new ChatMessages('Zahid Anwar', 'Asfar Ahmed', 'Good Morning');


    $firstMessage->dispalyMessage();









?>