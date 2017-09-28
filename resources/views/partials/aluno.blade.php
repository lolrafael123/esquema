@extends('layouts.layoutaluno') @section('title', 'Aluno') @section('nav')
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

                        <p class="white-text">Aluno</p>
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

            @endsection @section('content')
            <table class="striped bordered ">
                <thead>
                    <tr class="white">
                        <th>Código</th>
                        <th>Data</th>
                        <th>Menção</th>
                        <th>Ciência</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="blue lighten-4">
                        <td>001</td>
                        <td>28/09/2017</td>
                        <td>MB</td>
                        <td>
                            <p>
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Vistar</a>
                            </p>
                        </td>
                    </tr>
                    <tr class="white">
                        <td>002</td>
                        <td>28/09/2017</td>
                        <td>I</td>
                        <td>
                            <p>
                                <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                                <label for="test7">Visto</label>
                            </p>
                        </td>
                    </tr>
                    <tr class="blue lighten-4">
                        <td>003</td>
                        <td>28/09/2017</td>
                        <td>B</td>
                        <td>
                            <p>
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Vistar</a>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>
                        <center>Digite o código de confirmação:</center>
                    </h4>
                    <input type="text" name="" value="" placeholder="Digite o código aqui" />
                </div>
                <div class="modal-footer">
                    <a href="#modal2" class="modal-action modal-close waves-effect waves-green btn-flat left modal-trigger ">Não sei o código de confirmação</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Confirmar</a>
                </div>
            </div>

            <!-- Modal Structure-->
            <div id="modal2" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Modal Header</h4>
                    <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
                </div>
            </div>

            @endsection