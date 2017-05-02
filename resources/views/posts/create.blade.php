@extends('main')

@section('title', ' | Create New Post')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{!! URL::asset('css/parsley.css') !!}">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            <form method="post" action="{!! route('posts.store')  !!}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="body">Body: </label>
                    <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-lock">
                </div>
            </form>
        </div>
    </div><!-- end of header .row -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{!! URL::asset('js/parsley.min.js') !!}"></script>
@endsection