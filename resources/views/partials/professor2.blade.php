@extends('layouts.layoutprofessor')

@section('nav')
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
                            <li><a href="/formprof"><i class="material-icons indigo-text text-darken-4">face</i> Perfil</a>
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
                    <p class="white-text col s12">Data:<input type="date"></p>
                    <div class="input-field col s12 white-text">
                        <input id="" type="text">
                        <label for="">Título</label>
                    </div>
                   <div class="input-field col s12 grey-text">
                        <select>
                            <option value="" disabled selected>Sala</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                                
                    </div>
                    <div class="input-field col s12 grey-text">
                        <select>
                            <option value="" disabled selected>Diciplina</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
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
    <div class="input-field col s4">
        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        <label for="disabled" class="red-text">Diciplina</label>
    </div>
    <div class="input-field col s4">
        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        <label for="disabled" class="red-text">Data</label>
    </div>
    <div class="input-field col s4">
        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
        <label for="disabled" class="red-text">Sala</label>
    </div>
</div>
<table class="striped bordered">
    <thead>
        <tr class="white">
            <th>Aluno</th>
            <th><center>Conceito</center></th>
            <th>Ciência</th>
        </tr>
    </thead>

    <tbody>
        <tr class="blue lighten-4">
            <td>José</td>
            <td>
                <div class="input-field col s2 offset-s5">
                    <select>
                            <option value="" disabled selected>Nenhum</option>
                            <option value="1">I</option>
                            <option value="2">R</option>
                            <option value="3">B</option>
                            <option value="4">MB</option>
                    </select>
                </div>
            </td>
            <td>
                <p>
                    <input type="checkbox" id="test8" disabled="disabled" />
                    <label for="test8">Não Visto</label>
                </p>
            </td>
        </tr>
        <tr class="white">
            <td>João</td>
            <td>
                <div class="input-field col s2 offset-s5">
                    <select>
                            <option value="" disabled selected>Nenhum</option>
                            <option value="1">I</option>
                            <option value="2">R</option>
                            <option value="3">B</option>
                            <option value="4">MB</option>
                    </select>
                </div>
            </td>
            <td>
                <p>
                    <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                    <label for="test7">Visto</label>
                </p>
            </td>
        </tr>
        <tr class="blue lighten-4">
            <td>Maria</td>
            <td>
                <div class="input-field col s2 offset-s5">
                    <select>
                            <option value="" disabled selected>Nenhum</option>
                            <option value="1">I</option>
                            <option value="2">R</option>
                            <option value="3">B</option>
                            <option value="4">MB</option>
                    </select>
                </div>
            </td>
            <td>
                <p>
                    <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                    <label for="test7">Visto</label>
                </p>
            </td>
        </tr>
    </tbody>
</table><br />
<div class="col s4 offset-s8">
    <a class="waves-effect waves-light btn blue ">Salvar</a> &nbsp<a class="waves-effect waves-light btn red" href="/professor">Encerrar</a>
</div>

<!-- <div id="modal1" class="modal">
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
</script>-->

@endsection