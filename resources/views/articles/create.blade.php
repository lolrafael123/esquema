@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h2>Cadastrar Prova <a href="{{ url('articles') }}" style="float: right;font-size: 18px;">Listagem de Provas</a></h2>

            @include('articles.errors')

            {!! Form::open(['url' => 'articles']) !!}
               
            @include('articles.form', ['submitButtonName' => 'Adicionar Prova'])

            {!! Form::close() !!}


        </div>
        
    </div>
</div>
@endsection

