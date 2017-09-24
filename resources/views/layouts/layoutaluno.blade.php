<!DOCTYPE html>
<html>

<head>

    <title>VPO - @yield('title')</title>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
</head>

<body id="layout">
    <div class="col s12">
        <div class="section indigo darken-4"></div>
    </div>


    <div class="col s12">
        <div class="section indigo darken-3">
            <nav>
                <div class="nav-wrapper right">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="wrapper">
        @yield('nav')
    </div>

    <div class="row">
        <div class="col s3"></div>

        <div class="col s9">
            @yield('content')
        </div>
    </div>


</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>

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