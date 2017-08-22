<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf8"/>
  <title></title>
</head>
<body>
  <form method="post" action="processa-cadastro.php">
    <label>Título:</label><br/>
    <input type="text" name="titulo" size="50"/><br/>
    <br/>
    <label>Ano:</label><br/>
    <input type="text" name="ano" size="5"/><br/>
    <br/>
    <label>Resumo:</label><br/>
    <textarea name="resumo" cols="50" rows="10"></textarea><br/>
    <br/>
    <label>Categoria:</label><br/>
    <select name="categoria">
      <option value="Ação">Ação</option>
      <option value="Ficção Científica">Ficção Científica</option>
      <option value="Comédia">Comédia</option>
      <option value="Animação">Drama</option>
      <option value="Animação">Animação</option>
      <option value="Terror">Terror</option>
    </select>
    <br/>
    <br/>
    <label>Duração:</label><br/>
    <input type="text" name="duracao" size="10"/><br/>
    <br/>
    <label>Poster:</label><br/>
    <input type="text" name="poster" size="100"/><br/>
    <br/>

    <input type="submit" value="Enviar"/>
    <input type="reset" value="Limpar"/>
  </form>
</body>
</html>
