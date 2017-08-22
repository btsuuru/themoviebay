<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <title>The Movie Bay</title>
  <!-- Main -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Font Awesome 4.7.0 -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Custom -->
  <link href="fonts/fonts.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <div class="cabecalho">
    <img src="./imgs/pronto.jpg" />
  </div>

  <nav class="navbar navbar-inverse" data-spy="affix">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-film" aria-hidden="true"></i>The Movie Bay</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Início <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Cadastro</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="lista.php?ano=2017">Lançamentos<span class="glyphicon glyphicon-star" aria-hidden="true"></span></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="lista.php?categoria=AÃ§Ã£o">Ação</a></li>
              <li><a href="lista.php?categoria=AnimaÃ§Ã£o">Animação</a></li>
              <li><a href="lista.php?categoria=Aventura">Aventura</a></li>
              <li><a href="lista.php?categoria=ComÃ©dia">Comédia</a></li>
              <li><a href="lista.php?categoria=Corrida">Corrida</a></li>
              <li><a href="lista.php?categoria=Drama">Drama</a></li>
              <li><a href="lista.php?categoria=FicÃ§Ã£o CientÃ­fica">Ficção Científica</a></li>
              <li><a href="lista.php?categoria=Romance">Romance</a></li>
              <li><a href="lista.php?categoria=Suspense">Suspense</a></li>
              <li><a href="lista.php?categoria=Terror">Terror</a></li>
            </ul>
          </li>
        </ul>
        <form action="lista.php" method="get" class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" name="titulo" placeholder="Procurar">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </span>
          </div><!-- /input-group -->
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" data-toggle="modal" data-target="#CadastroUsuario">Criar Conta</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


  <!-- Modal -->
  <div class="modal fade" id="CadastroUsuario" role="dialog" style="padding-top: 10%">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Criar Conta</h4>
        </div>
        <div class="modal-body">
          <section class="container-fluid" id="section3">
            <div class="row">
              <div class="col-xs-0 col-md-2">
              </div>
              <div class="col-xs-12 col-md-8">
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active" id="tab1"><a href="#cadastro" data-toggle="tab">Cadastro</a></li>
                  <li role="presentation" id="tab3"><a href="#conclusao" data-toggle="tab">Conclusão</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="cadastro">
                    <form action="cadastro.php" method="post" id="formExemplo" data-toggle="validator" role="form">
                      <div class="form-group">
                        <label for="textNome" class="control-label">Nome</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="textNome" name="nome" class="form-control" placeholder="Digite seu Nome..." type="text"
                          pattern="^[A-z ]{4,}" data-error="Insira um nome válido." required>
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="control-label">Email</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input id="inputEmail" name="email" class="form-control" placeholder="Digite seu E-mail" type="email"
                          data-error="Por favor, informe um e-mail válido." required>
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword" class="control-label">Senha</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Digite sua Senha..."
                          data-minlength="6" required>
                        </div>
                        <span class="help-block">Mínimo de seis (6) digitos</span>
                      </div>
                      <div class="form-group">
                        <label for="inputConfirm" class="control-label">Confirme a Senha</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" id="inputConfirm" placeholder="Confirme sua Senha..."
                          data-match="#inputPassword" data-match-error="Atenção! As senhas não estão iguais." required>
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>
                      <!--
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary"onclick="trocaAba(2)">Próximo</button>
                    </div> -->
                  </form>
                  <center>
                    <a class="btn btn-primary" href="#conclusao" data-toggle="tab" id="tab2" onclick="trocaAba(3)">Próximo</a>
                  </center>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="conclusao">
                  <div style="background-color: #DDDDDD; overflow: show">
                    <h1>Termos de uso</h1>
                    <p>
                      blablabla blablabla aceito blablabla filmes blablabla<br />
                      blablabla blablabla aceito blablabla filmes blablabla<br />
                      blablabla blablabla aceito blablabla filmes blablabla<br />
                      blablabla blablabla aceito blablabla filmes blablabla<br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                      <br />
                    </p>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" data-error="Você deve marcar este campo!" required> Marque este item.
                        </label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <center>
                    <a class="btn btn-warning" href="#cadastro" data-toggle="tab" id="tab2" style="width: auto" onclick="trocaAba(1)">Anterior</a>
                    <!-- <a class="btn btn-success" href="#" data-toggle="tab" id="botao" style="width: auto">Concluir</a> -->
                    <button class="btn btn-success" type="submit">Concluir</button>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-xs-0 col-md-2">
            </div>
          </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
  </div>

<?php

    $conn = new mysqli("localhost", "meusfilmes", "abc123*", "meusfilmes");
    if ($conn->connect_error) die($conn->connect_error);
    if(isset($_GET['categoria'])){
      $cat = $_GET['categoria'];
      $query = "SELECT id, titulo, ano, resumo, categoria, duracao, poster FROM filmes WHERE categoria='".$cat."'";
    }else if(isset($_GET['ano'])){
      $ano = $_GET['ano'];
      $query = "SELECT id, titulo, ano, resumo, categoria, duracao, poster FROM filmes WHERE ano='".$ano."'";
    }else if (isset($_GET['titulo'])){
      $titulo = $_GET['titulo'];
      $query = "SELECT id, titulo, ano, resumo, categoria, duracao, poster FROM filmes WHERE titulo='%".$titulo."%'";
    }
    $result = $conn->query($query);
    if (!$result) die($conn->error);

    echo '<div class="container">';
    echo '<div class="row">';
    $rows = $result->num_rows;
    for ($i = 0 ; $i < $rows ; ++$i) {
      $result->data_seek($i);
      $row = $result->fetch_array(MYSQLI_ASSOC);

      $titulo = $row['titulo'];
      $poster = $row['poster'];
      $ano =  $row['ano'];
      $resumo = $row['resumo'];
      $categoria =  $row['categoria'];
      $duracao = $row['duracao'];

      echo '  <div class="col-sm-6 col-md-3" style="min-height: 90vh">';
      echo '    <div class="thumbnail">';
      echo '      <img src="'.$poster.'" style="width: 100%">';
      echo '      <div class="caption">';
      echo '        <h3>'.$titulo.'</h3>';
      echo '        <p style="text-align: justify;overflow:auto; height: 10em">'.$resumo.'</p>';
      echo '        <p><a href="#" class="btn btn-primary" role="button">Assistir</a>';
      echo '      </div>';
      echo '    </div>';
      echo '  </div>';
    }

    echo '</div>';
    echo '</div>';
    $result->close();
    $conn->close();
?>

</body>

<!-- JavaScript -->
<!-- jQuery 3.2.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Custom -->
<script src="./js/validator.js"></script>
<script src="./js/script.js"></script>
</html>
