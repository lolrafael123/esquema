@extends('layouts.layoutaluno')

@section('title', 'Aluno')

@section('sidebar')
    @parent

   
@endsection

@section('indigo')
<div class="col s12">
    <div class="section indigo darken-4">
        
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
    
        <br><br>
@endsection

@section('content')
    <table class="striped bordered ">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Data</th>
                    <th>Situação</th>
                </tr>
            </thead>

            <tbody>
                <tr class="cyan lighten-5">
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
                <tr class="cyan lighten-5">
                    <td>003</td>
                    <td>27/05/2017</td>
                    <td>Aberta &nbsp<a class="waves-effect waves-light btn-floating indigo modal-trigger" href=""><i class="large material-icons">remove_red_eye</i></a>
                        &nbsp<a class="waves-effect waves-light btn-floating red modal-trigger" href="#modal1"><i class="large material-icons">clear</i></a></a></td></td>
                </tr>
            </tbody>
        </table>


@endsection