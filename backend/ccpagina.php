<?php

$name = $_POST['name'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

file_put_contents('ccpagina.txt', $name . "," . ". "  . $email ."," . "." . $bericht ."," . "\n", FILE_APPEND);



header("Location: ../index.php?msg=Je mail is verzonden");

?>

