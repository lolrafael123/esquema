@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h2>Edição : {{ $article->title }} <a href="{{ url('articles') }}" style="float: right;font-size: 18px;">Listagem de Provas</a></h2>

            @include('articles.errors')


            {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

            @include('articles.form', ['submitButtonName' => 'Editar'])

            {!! Form::close() !!}


        </div>

    </div>
</div>
@endsection

