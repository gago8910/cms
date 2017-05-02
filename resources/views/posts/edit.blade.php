@extends('main')

@section('title', ' | Edit Blog Post')

@section('content')

    <div class="row">
        <form method="POST" action="{!! route('posts.update', array($post->id)) !!}">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PUT">
            <div class="col-md-8">
                <label for="title">Title: </label>
                <input type="text" name="title" class="form-control input-lg" value="{!! old('title', $post->title) !!}">

                <label for="body" class="form-spacing-top">Body: </label>
                <textarea name="body" class="form-control">{!! old('body', $post->body) !!}</textarea>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created At: </dt>
                        <dd>{!! date('M j, Y h:iA', strtotime($post->created_at)) !!}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Last Updated: </dt>
                        <dd>{!! date('M j, Y h:iA', strtotime($post->updated_at)) !!}</dd>
                    </dl>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{!! route('posts.show', array($post->id)) !!}" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" value="Save Changes" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div><!-- End of the .row (form) -->

@stop