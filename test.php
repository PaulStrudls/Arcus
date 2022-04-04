<?php
session_start();
require './classes/user.php';
require './classes/utils.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="test.php">Test 1</a></li>
        <li><a href="test2.php">Test 2</a></li>
    </ul>

<?php
    $tim = User::getUserByNickName("ThisTim");
    // $_SESSION['loggedUser'] = $tim;

    // save values of user in session variable
    $_SESSION['userId'] = $tim->userId;
    $_SESSION['firstName'] = $tim->firstName;
    $_SESSION['lastName'] = $tim->lastName;
    $_SESSION['nickName'] = $tim->nickName;
    $_SESSION['password'] = $tim->password;
    $_SESSION['guest'] = $tim->guest;
?>
</body>
</html>