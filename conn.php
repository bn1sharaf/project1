<?php

include 'config.php';

$name = $_POST["name"];
$phone = $_POST["phon"];
$email = $_POST["email"];
$massage = $_POST["massage"];

if ($mysqli->query("INSERT INTO contant (Name, phone,email, massage) VALUES('$name', '$phone', '$email', '$massage')")) {
    echo 'Data inserted';
    echo '<br/>';
}

header("location:conect.php");
