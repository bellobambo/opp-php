<?php

require('user_validator.php');

if (isset($_POST["submit"])) {
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM TUTORIAL</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="new-user">
        <h2>Create New User</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label>Username:</label>
            <input type="text" name="username" value='<?php echo htmlspecialchars($_POST['username']) ?? '' ?> '>
            <div class="error">
                <?php
                echo $errors['username'] ?? ''
                    ?>
            </div>

            <label>Email:</label>
            <input type="text" name="email"  value='<?php echo htmlspecialchars($_POST['email']) ?? '' ?>>
            <?php
            echo $errors['email'] ?? ''
                ?>

            <input type="submit" value="submit" name='submit'>
        </form>
    </div>

</body>

</html>