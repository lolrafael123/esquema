@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update_post', ['post' => $post->id]) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                            <label for="data" class="col-md-4 control-label">Data</label>

                            <div class="col-md-6">
                                <textarea name="data" id="data" cols="30" rows="10" class="form-control" required>{{ old('data', $post->data) }}</textarea>
                                @if ($errors->has('data'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sala') ? ' has-error' : '' }}">
                            <label for="sala" class="col-md-4 control-label">sala</label>

                            <div class="col-md-6">
                                <textarea name="sala" id="sala" cols="30" rows="10" class="form-control" required>{{ old('sala', $post->sala) }}</textarea>
                                @if ($errors->has('sala'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sala') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('disciplina') ? ' has-error' : '' }}">
                            <label for="disciplina" class="col-md-4 control-label">disciplina</label>

                            <div class="col-md-6">
                                <textarea name="disciplina" id="disciplina" cols="30" rows="10" class="form-control" required>{{ old('disciplina', $post->disciplina) }}</textarea>
                                @if ($errors->has('disciplina'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disciplina') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                @can('publish-post')
                                <a href="{{ route('publish_post', ['post' => $post->id]) }}" class="btn btn-primary">
                                    Publish
                                </a>
                                @endcan
                                <a href="{{ route('list_posts') }}" class="btn btn-primary">
                                    Cancel
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