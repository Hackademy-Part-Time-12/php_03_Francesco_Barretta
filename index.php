<?php

class Student {
    //ATTRIBUTI
    public $name;
    public $email;
    private $eta;

    function __construct($name, $email, int $eta){
        $this->name = $name;
        $this->setEmail($email);
        $this->eta = $eta;
    }

    //METODI o METHODS
    function presentati(){
        echo "Salve, mi chiamo $this->name, ho $this->eta anni, la mia email è $this->email";
    }

    function setEmail(String $email){
        if($email !=  "")
            $this->email = $email;
    }

    private function getAge(){
        if($this->eta >= 18 && $this->eta <= 30){
            return "\netà compresa tra 18 - 30";

        } else if ($this->eta >= 31 && $this->eta <= 50) {
            return "\netà compresa tra 31 - 50";

        } else if($this->eta >= 50){
            return "\netà compresa tra 50+";

        } else if ($this->eta > 0 && $this->eta < 18){
            return "\nsei minorenne, non sei ammesso";

        } else {
            return "\netà non corretta";
        }
    }

    public function ageRange(){

        echo "{$this->getAge()}";

    }


};

$Francesco = new Student("Francesco", "email@email.com", 25);


echo ($Francesco->nome);
$Francesco -> presentati();



//$Francesco -> getAge();

$Francesco -> ageRange();




?>