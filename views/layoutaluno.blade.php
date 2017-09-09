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

<body id="layout">
    <!-- test 
    <header>
        <div class="navbar-fixed">
            <nav class="indigo darken-4 top-nav nav">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 <img src="../public/images/logo.png">
            </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">

                    </ul>
                </div>
        </div>
        </nav>
    </header>
     -->

    <!-- layout -->
    <div class="wrapper">
        <div class="row">

            <ul class="side-nav fixed hoverable indigo darken-3">
                <li class="indigo darken-4 z-depth-2">
                    <div class="row">
                        <br>
                        <div class="col s4 m4 l4">
                            <img src="../public/images/989.jpg" alt="" class="circle responsive-img">
                        </div>
                        <center>
                            <div class="col s12 m8 l8">

                                <!-- Dropdown Structure -->
                                <ul id='dropdown1' class='dropdown-content'>
                                    <li><a href="#"><i class="material-icons indigo-text text-darken-4">face</i> Perfil</a>
                                    </li>
                                    <li><a href="#"><i class="material-icons indigo-text text-darken-4">keyboard_tab</i> Sair</a>
                                    </li>

                                </ul>
                                <!-- Dropdown Trigger -->
                                <a class='dropdown-button btn red col s12' href='#' data-activates='dropdown1'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRafael<i class="material-icons right">arrow_drop_down</i></a>

                                <p class="white-text">Professor</p>
                            </div>
                        </center>
                    </div>
                    <div class="col s12">
                        <form>
                            <center>
                                <h4 class="white-text">Sobre</h4>
                                
                                
                                <span class="white-text">Desenvolvido pela sala do 3º ano do Ensino Médio. Integrado ao Técnico de Informática em 2017 para
                                    auxiliar os professores na gestão de provas.</span>
                                
                                <a class="waves-effect waves-light btn white-text red" href="https://login.microsoftonline.com" target="_blank">E-mail</a>
                                <a class="waves-effect waves-light btn white-text red" href="https://nsa.cps.sp.gov.br/" target="_blank">NSA</a>
                                <a class="waves-effect waves-light btn white-text red" href="http://www.pfalves.com.br/" target="_blank">PFA</a>
                            </center>

                        </form><br>
                    </div>
                    <div class="col s12 z-depth-5">
                        <form>
                            <center>
                                <h4 class="white-text">Contato</h4>
                            </center>
                            <p class="white-text"><i class="material-icons red-text">call</i> (19) 3862-0888 / (19) 3862-0177 </p>
                            <p class="white-text"><i class="material-icons red-text">email</i> Mail@example.com </p>
                            <p class="white-text"><i class="material-icons red-text">home</i> Rua. Ariovaldo Silveira Franco, 237 </p>
                        </form>
                    </div>

</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/app.js"></script>

<!-- efeito do botão -->
<script>
    $('.fixed-action-btn').openFAB();
    $('.fixed-action-btn').closeFAB();
    $('.fixed-action-btn.toolbar').openToolbar();
    $('.fixed-action-btn.toolbar').closeToolbar();

</script>
<!-- fim efeito botão -->

<script>
    $('.dropdown-button').dropdown('open');
    $('.dropdown-button').dropdown('close');

</script>
<!-- select -->
<script>
    $(document).ready(function () {
        $('select').material_select();
    });

</script>
<!-- fim do select -->

<!-- data -->
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });

</script>
<!-- fim data-->

</html>