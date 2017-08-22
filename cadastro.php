<?php
    $conn = new mysqli("localhost", "meusfilmes", "abc123*", "meusfilmes");
    if (isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['senha'])) {
    $query = "INSERT INTO usuarios VALUES ("$_POST['nome']","$_POST['email']","$_POST['senha']")";
    }
    $result = $conn->query($query);
    if (!$result) die($conn->error);
    $result->close();
    $conn->close();
    
?>
