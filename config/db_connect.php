<?php
    $conn = mysqli_connect('localhost', 'root', '', 'wytepizzas');
    $error = '';
    if(!$conn){
        $error = "We can't connect to database WytePizzas" .  mysqli_connect_error();
    }
?>