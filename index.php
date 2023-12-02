<?php

class User
{

    public $username;
    protected $email;
    public $role = 'member';


    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct(){
        echo "the user $this->username was removed". '<br>' ;
    }

    public function __clone(){
       $this->username = $this->username . '(cloned)<br>'; 
    }

    public function addFriend()
    {
        return "$this->username added a new friend";
    }

    public function message()
    {
        return "$this->email sent new message";
    }



    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }


}


class AdminUser extends User{
    public $level;
    public $role = 'Admin';
  
    public function __construct($username, $email, $level){
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function message()
    {
        return "$this->email,an admin sent new message";
    }
}


$userOne = new User('mario', 'mario@gmail.com');
$userTwo = new User('olaa', 'olaa@gmail.com');
$userThree = new AdminUser('yoshi', 'yoshi@thenetninja.com', 5);

$userFour =  clone $userOne;
echo $userFour->username;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>