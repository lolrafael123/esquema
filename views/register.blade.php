<!DOCTYPE html>
<html>

<head>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="../public/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="../public/css/font-awesome.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="red">
  <div class="row">
  <br />
  <div class="col s4 offset-s4">
  <center>
   <a href="home.blade.php">
  <img src="../public/images/logos.png">
  </a>
  </center>
  </div>
    <div class="col s4 offset-s4 card-panel">
      <form>
      <center>
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Registro</h4>
            <p class="center">Cadastre-se como aluno ou professor!</p>
          </div>
        </div>
        </center>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">person_outline</i>
            <input id="icon_prefix" type="text" class="validate">
            <label>Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input id="email" type="email" class="validate">
            <label for="email" data-error="Incorreto!" data-success="Certo!">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          <i class="material-icons prefix">vpn_key</i>
            <input id="password" type="password">
            <label>Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          <i class="material-icons prefix">vpn_key</i>
            <input id="password-again" type="password">
            <label >Confirme sua Senha</label>
          </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">supervisor_account</i>
    <select>
    <option value="" disabled selected>Você é Aluno ou Professor?</option>
      <option value="1">Aluno</option>
      <option value="2">Professor</option>
    </select>
  </div>
  </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index.html" class="btn waves-effect waves-light col s12 indigo darken-4">Registrar!</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Já possui uma conta? <a class="red-text" href="home.blade.php">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</center>
<br /><br>
   <!-- rodapé -->
    <footer class="page-footer  red darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <!-- fim do rodapé-->
 <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>

     <!-- select -->
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
    <!-- fim do select -->

</body>

</html>