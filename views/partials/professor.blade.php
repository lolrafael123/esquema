<!DOCTYPE html>
<html>

<head>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="../../public/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../../public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="../../public/css/font-awesome.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="row">

      <div class="col s3">
        
      </div>
    <div class="col s9">
        <table class="striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Data</th>
                    <th>Situação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>001</td>
                    <td>18/06/2017</td>
                    <td>Encerrada</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>18/05/2017</td>
                    <td>Aberta &nbsp<a class="waves-effect waves-light btn-floating indigo modal-trigger" href=""><i class="large material-icons">remove_red_eye</i></a>
                        &nbsp<a class="waves-effect waves-light btn-floating red modal-trigger" href="#modal1"><i class="large material-icons">clear</i></a></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>27/05/2017</td>
                    <td>Aberta &nbsp<a class="waves-effect waves-light btn-floating indigo modal-trigger" href=""><i class="large material-icons">remove_red_eye</i></a>
                        &nbsp<a class="waves-effect waves-light btn-floating red modal-trigger" href="#modal1"><i class="large material-icons">clear</i></a></a></td></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Encerrar Prova?</h4>
            <p>Você tem certeza que gostaria de encerrar essa prova?</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Não</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sim</a>
        </div>
        
    </div>

    <script>
        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>
</body>

</html>