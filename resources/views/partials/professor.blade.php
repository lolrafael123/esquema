@extends('layouts.layoutprofessor') 


@section('conteudo')
    <table class="striped bordered ">
        <thead>
            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Situação</th>
            </tr>
        </thead>

        <tbody>
            <tr class="blue lighten-4">
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
            <tr class="blue lighten-4">
                <td>003</td>
                <td>27/05/2017</td>
                <td>Aberta &nbsp<a class="waves-effect waves-light btn-floating indigo modal-trigger" href=""><i class="large material-icons">remove_red_eye</i></a>
                    &nbsp<a class="waves-effect waves-light btn-floating red modal-trigger" href="#modal1"><i class="large material-icons">clear</i></a></a></td></td>
            </tr>
        </tbody>
    </table>



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

@endsection