<?php
    class User {
        private $name;
        private $surname;
        private $email;
        public $sconto;

        public function __construct($name,$surname,$email,$sconto = 0)
        {
            $this -> name = $name;
            $this -> surname = $surname;
            $this -> email = $email;

        }
        
        function setSconto($annoDiIscrizione) {
            if ($annoDiIscrizione >= 5) {
                $this -> sconto = 15 . "%";
            }
        }
    }
    
    // var_dump($anonymous);
?>
