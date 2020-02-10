<?php 

/**Classes */

class User {

    private $email;
    private $name;

    public function __construct($name, $email)
    {
        //$this->email = 'selene@4040apps.com';
        //$this->name  = 'selene';
        $this->email = $email;
        $this->name  = $name;
        
    }

    public function login(){
        //echo 'The user logged in ';
        echo $this->name . ' Logged in ';
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return 'name has been update to ';
        } else {
            return 'not a valid name';
        }
    }
}
/* $userOne = new User();
$userOne->login();
echo $userOne->email; */



$userTwo = new User('teran', 'teran@alguno.com');
//echo $userTwo->name;
//echo $userTwo->email;
//$userTwo->login();
//$userTwo->name = 50;
//echo $userTwo->getName();
echo $userTwo->setName('teran');
echo $userTwo->getName();

?>