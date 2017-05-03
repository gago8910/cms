@extends('main')

@section('title', ' | Create New Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{!! $post->title !!}</h1>
            <p class="lead">
                {!! $post->body !!}
            </p>
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
                        <a href="{!! route('posts.edit', array($post->id)) !!}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <form method="post" action="{!! route('posts.destroy', array($post->id)) !!}">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="DELETE">
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-danger btn-block" value="Delete">
                        </div>
                    </form>
                </div>
                <div class="row btn-h1-spacing">
                    <div class="col-sm-12">
                        <a href="{{ route('posts.index') }}" class="btn btn-default btn-sm btn-block"><< See All Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection