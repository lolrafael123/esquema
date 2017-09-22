@extends('layouts.layoutprofessor') @section('title', 'Professor') @section('sidebar') @parent @endsection @section('indigo')
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

        <br><br><br> @endsection @section('content')
        
            <div class="row">
                <div class="input-field col s4">
                    <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                    <label for="disabled">Nome</label>
                </div>
                
                    <div class="col s6 offset-s6">
                     
                <center>
                    <h3>Sobre nós</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu tortor non metus hendrerit mollis. Vestibulum
                        non orci leo. Morbi at ligula dui. Cras a lacus id augue aliquam finibus. Morbi fringilla eleifend
                        luctus. In nec accumsan tellus, in rhoncus nisi. Sed nec enim lectus. Duis a congue velit. Praesent
                        ullamcorper fermentum nisl, et fringilla est venenatis at. Quisque faucibus dictum magna sed pharetra.
                        Phasellus feugiat lobortis neque, in eleifend ipsum tincidunt ut. Maecenas non tempus dolor.</p>
                </center> 
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input disabled value="I am not editable" id="disabled" type="email" class="validate">
                        <label for="disabled">Email</label>
                    </div>
                    <div class="row">
                        <div class="col s4"></div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input disabled value="I am not editable" id="disabled" type="password" class="validate">
                            <label for="disabled">Senha</label>
                        </div>

  
                        @endsection