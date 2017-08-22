<?php
$server = "localhost";
$usuario = "meusfilmes";
$senha = "abc123*";
try{
  $db = new PDO('mysql:host='$server';dbname=meusfilmes', $usuario, $senha);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}
catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php
$server = "localhost";
$usuario = "meusfilmes";
$senha = "abc123*";
try{
  $conn = new PDO('mysql:host=localhost;dbname=meusfilmes', $usuario, $senha);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
  $stmt = $conn->prepare("SELECT titulo, ano, resumo, categoria, duracao, poster FROM filmes");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
    echo $k;
  }

/*
  $row = $result->fetch_array(MYSQLI_ASSOC);

  $titulo =  $row['titulo'];
  $poster = $row['poster'];
  $ano =  $row['ano'];
  $resumo = $row['resumo'];
  $categoria =  $row['categoria'];
  $duracao = $row['duracao'];
  echo "<img src='$poster' />";
  echo "$titulo<br/>";
  echo "$ano<br/>";
  echo "$resumo<br/>";
  echo "$categoria<br/>";
  echo "$duracao<br/>";*/
  echo "-------------------------------<br />";

}
catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}

?>
