<?php

class User
{

    public $username;
    public $email;


    public function __construct($username, $email)

    {
        $this->username = $username;
        $this->email = $email;
    }


    public function addFriend()
    {
        return "$this->username added a new friend $this->email";
    }



}

$userOne = new User('mario', 'mario@gmail.com');
$userTwo = new User('olaa', 'olaa@gmail.com');

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br><br>';


echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';
echo $userTwo->addFriend() . '<br>';





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