<?php
session_start();
require './classes/db.php';
require './classes/utils.php';
require './classes/user.php';
require './classes/parcour.php';
require './classes/score.php';
require './classes/animal.php';
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
    
    $new_parcour = new Parcour(Utils::nextId("parcour"), '$name', '$place', '$animalCount');

    echo $new_parcour->parcourId;
    echo $new_parcour->name;
    echo $new_parcour->place;
    echo $new_parcour->animalCount;

    // try {
    //     $tim->insert();
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }
?>
</body>
</html>