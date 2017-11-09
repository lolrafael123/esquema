@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nova Avaliação</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store_post') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">Título</label>

                            <div class="col-md-9">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                            <label for="data" class="col-md-2 control-label">Data</label>

                            <div class="col-md-9">
                                <input id="data" type="text" class="form-control" name="data" value="{{ old('data') }}" required autofocus>
                                @if ($errors->has('data'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sala') ? ' has-error' : '' }}">
                            <label for="sala" class="col-md-2 control-label">Sala</label>

                            <div class="col-md-9">
                                <input id="sala" type="text" class="form-control" name="sala" value="{{ old('sala') }}" required autofocus>
                                @if ($errors->has('sala'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sala') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('disciplina') ? ' has-error' : '' }}">
                            <label for="disciplina" class="col-md-2 control-label">Disciplina</label>

                            <div class="col-md-9">
                                <input id="disciplina" type="text" class="form-control" name="disciplina" value="{{ old('disciplina') }}" required autofocus>
                                @if ($errors->has('disciplina'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disciplina') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Criar
                                </button>
                                <a href="{{ route('list_posts') }}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection