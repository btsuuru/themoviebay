<?php
 
    $titulo = $_POST["titulo"];
    $ano = $_POST["ano"];
    $resumo = $_POST["resumo"];
    $categoria = $_POST["categoria"];
    $duracao = $_POST["duracao"];
    $poster = $_POST["poster"];
   
    $conn = new mysqli("localhost", "meusfilmes", "abc123*", "meusfilmes");
    if ($conn->connect_error) die($conn->connect_error);
   
    $query = "INSERT INTO filmes (titulo, ano, resumo, categoria, duracao, poster) VALUES ('$titulo', '$ano', '$resumo', '$categoria', '$duracao', '$poster');";
 
    $result = $conn->query($query);
   
    if (!$result) die($conn->error);
   
    $conn->close();
   
   
    echo "Dados gravados com sucesso!";
    //header("Location: lista.php");
    die();
?>
