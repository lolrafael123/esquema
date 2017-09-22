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
    <table  class="striped bordered ">
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
            


@endsection