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

<body>
    <nav class="transparent z-depth-0">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 <img src="../public/images/logo.png">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Projeto</a></li>
                <li><a href="badges.html">Sobre nós</a></li>
                <li><a href="collapsible.html">Contato</a></li>
                <li><a href="register.blade.php" class="waves-effect waves-light btn red hoverable">Registrar-se</a></li
            </ul>
        </div>
    </nav>

<br /><br /><br />
    <!-- Parallax e login -->
    <main>
        <div class="parallax-container">
            <!-- Parte de login -->
            <div class="container">
                <section class=section-hero>
                    <div class="row top-lg">
                        <div class="col l6 m12">

                        </div>
                        <div class="col l5 offset-l1 m12">
                            <div class="card hoverable top-md animated_delay_1">
                                <div class="card-content card-spaced">
                                    <h3 class="center">Login</h3>
                                    <div class="row top-md">
                                        <form class="col s12">
                                            <div class=row>
                                                <div class="input-field col m4 l8"> <input class=validate type=text>
                                                    <label for=first_name>Username <i class="material-icons right">account_circle</i></label>

                                                </div>
                                                <div class=row>
                                                    <div class="input-field col m4 l8"> <input class=validate type="password">
                                                        <label for=email>Senha <i class="material-icons right">fingerprint</i></label>
                                                    </div>
                                                </div> <button class="btn btn-large btn-block blue waves-effect waves-light indigo darken-4"
                                                    name=action type=submit>Entrar <i class="material-icons right">send</i></button>                                                &nbsp
                                                <a class="red-text text-red" href="#">Esqueceu a senha?</a>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                </div>
                <!-- fim da parte de login -->
                <div class="parallax"><img src="../public/images/logo2.jpg"></div>
            </div>

    </main>
    <!-- Fim Parallax e login -->



    <!-- vídeo -->
    <div class="section  red darken-4" id="video">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2">
                    <div class="container">
                        <i class="white-text medium material-icons">assignment_turned_in</i></div>
                    <p align="justify" class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet ante efficitur, interdum lacus id,
                        commodo sapien.</p>
                </div>
                <div class="col s12 m4 l8">
                    <video class="materialboxed container" width="650" controls>
                        <source src="../public/media/vídeos/temer.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s12 m4 l2">
                    <div class="container">
                        <i class="white-text medium material-icons  ">assignment_turned_in</i></div>
                    <p align="justify" class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet ante efficitur, interdum lacus id,
                        commodo sapien.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <div class="container">
                        <i class="white-text medium material-icons">assignment_turned_in</i></div>
                    <p align="justify" class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet ante efficitur, interdum lacus id,
                        commodo sapien.</p>
                </div>
                <div class="col s4">
                    <div class="container">
                        <i class="white-text medium material-icons ">assignment_turned_in</i></div>
                    <p align="justify" class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet ante efficitur, interdum lacus id,
                        commodo sapien.</p>
                </div>
                <div class="col s4">
                    <div class="container">
                        <i class="white-text medium material-icons ">assignment_turned_in</i></div>
                    <p align="justify" class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet ante efficitur, interdum lacus id,
                        commodo sapien.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- fim vídeo -->



    <!-- parallax 2 -->
    <div class="parallax-container">
        <div class="parallax"><img src="../public/images/pexe4.jpg"></div>
    </div>
    <!-- fim do parallax 2 -->

    <!-- sobre nós -->
    <div class="section white">
        <div class="row">
            <div class="col s4">
            </div>
            <div class="col s4">
            <center>
                <h2>Sobre Nós</h2>
                </center>
            </div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <div class="col s4">
            </div>
        </div>
        <div id="card">
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s2"></div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="../public/images/989.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Card Title</span>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                    because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- fim sobre nós-->

    <!-- parallax 3 -->
    <div class="parallax-container">
        <div class="parallax"><img src="../public/images/pexe5.jpg"></div>
    </div>

    <!-- fim parallax 3-->
    <!-- contato -->
    <form>
        <div class="section indigo darken-4">
            <div class="container">
                <div class="row">
                <center>
                        <h2 class="white-text">Contato</h2><br />
                        </center>
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field col s6 white-text">
                                <input id="" type="text" class="validate">
                                <label for="">Nome</label>
                            </div>
                            <div class="input-field col s6 white-text">
                                <input id="" type="text" class="validate">
                                <label for="">Sobrenome</label>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <div class="input-field col s12 grey-text">
                                        <select>
                                  <option value="" disabled selected>Assunto</option>
                                  <option value="1">Option 1</option>
                                  <option value="2">Option 2</option>
                                  <option value="3">Option 3</option>
                                </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 white-text">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="Incorreto!" data-success="Certo!">Email</label>
                    </div>
                </div>



                <div class="row">
                    <div class="input-field col s6">
                        <textarea id="textarea1" class="materialize-textarea white-text validate"></textarea>
                        <label for="textarea1">Mensagem</label><br>
                        <a class="red darken-4 btn-large waves-effect waves-light btn">Enviar</a>
                    </div>
                </div>
            </div>
            <br /><br />
              <div class="container">
                        <div class="row">
                            <div class="col s6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.0259519134239!2d-46.95103828801451!3d-22.425118347243867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8f85011dea2dd%3A0x22b471946d92ea48!2sEscola+T%C3%A9cnica+Estadual+Pedro+Ferreira+Alves!5e0!3m2!1spt-BR!2sbr!4v1502994094819"
                                    width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
        </div>
        </div>
        </div>
    </form>
    <!-- fim do contato -->

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

    <!-- script do parallax -->
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });

        function callParallax() {
            $('.parallax').parallax();
        }

        window.load = callParallax();
    </script>
    <!-- fim do script do parallax -->

    <!-- efeito do botão -->
    <script>
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
        $('.fixed-action-btn.toolbar').openToolbar();
        $('.fixed-action-btn.toolbar').closeToolbar();
    </script>
    <!-- fim efeito botão -->

    <!-- select -->
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
    <!-- fim do select -->

    <!-- scrollfire -->
    <script>
        var options = [{
            selector: '#card',
            offset: 0,
            callback: function (el) {
                Materialize.fadeInImage($(el));
            }
        }];
        Materialize.scrollFire(options);
    </script>

    <!-- fim scrollfire-->
</body>

</html>