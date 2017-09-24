@extends('layouts.layoutprofessor') @section('nav')
<div class="row">

    <ul class="side-nav fixed hoverable indigo darken-3">
        <li class="indigo darken-4 z-depth-2">
            <div class="row">
                <br>
                <div class="col s4 m4 l4">
                    <img src="images/989.jpg" alt="" class="circle responsive-img">
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
                        <h4 class="white-text">Nova Prova</h4>
                    </center>
                    <p class="white-text">Data:<input type="date"></p>
                    <div class="input-field white-text">
                        <input id="" type="text">
                        <label for="">Título</label>
                    </div>
                    <div class="input-field white-text">
                        <input id="" type="text">
                        <label for="">Sala</label>
                    </div>
                    <div class="input-field white-text">
                        <input id="" type="text">
                        <label for="">Diciplina</label>
                    </div>

                    <a class="waves-effect waves-light btn red">Enviar</a>
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
        </li>
    </ul>
</div>
@endsection @section('conteudo')
<div class="row">
    <div class="col s12">

        <center>
            <h3>Sobre nós</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu tortor non metus hendrerit mollis. Vestibulum
                non orci leo. Morbi at ligula dui. Cras a lacus id augue aliquam finibus. Morbi fringilla eleifend luctus.
                In nec accumsan tellus, in rhoncus nisi. Sed nec enim lectus. Duis a congue velit. Praesent ullamcorper fermentum
                nisl, et fringilla est venenatis at. Quisque faucibus dictum magna sed pharetra. Phasellus feugiat lobortis
                neque, in eleifend ipsum tincidunt ut. Maecenas non tempus dolor.</p>
        </center>
    </div>

    <div class="row">
        <div class="input-field col s3">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Nome</label>
        </div>
        <div class="input-field col s3">
            <input disabled value="I am not editable" id="disabled" type="password" class="validate">
            <label for="disabled">Senha</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input disabled value="I am not editable" id="disabled" type="email" class="validate">
            <label for="disabled">E-mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s3">
            <input type="password" class="validate">
            <label for="">Nova senha</label>
        </div>

        <div class="input-field col s3">
            <input type="password" class="validate">
            <label for="">Confirme a nova senha</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="email" class="validate">
            <label for="">Novo E-mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="email" class="validate">
            <label for="">Confirme novo E-mail</label>
        </div>
    </div>
<div class="row">
<div class="col s6">
<img class="responsive-img hoverable" src="images/989.jpg">
</div>
</div>
    <form action="#">
        <div class="file-field input-field col s6">
            <div class="btn indigo">
                <span>Escolher foto</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    </form>
     <div class="fixed-action-btn">
    <a class="btn-floating btn-large red" href="/professor">
      <i class="large material-icons">arrow_back</i>
    </a>
   
    @endsection