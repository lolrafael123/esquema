<!DOCTYPE html>
<html>

<head>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
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

    <br><br>

    <div class="row">

        <div class="col s3"></div>

        <div class="col s9">
            @yield('conteudo')
        </div>

    </div>

    <script>
        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();

            $('select').material_select();
        });
    </script>


</body>


</html>