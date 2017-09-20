@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h2>{{$article->title}} <a href="{{ url('articles') }}" style="float: right;font-size: 18px;">Listagem de Provas</a></h2>

            <article>
                {{ $article->body }}
            </article>

        </div>
        
    </div>
</div>
@endsection

