@extends('layouts.main')

@section('title'){{ $post->title }} &bull; {{ config('app.name') }}@stop

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>URL</label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl>
					<label>Created at</label>
					<p>{{ date('j\'S M Y - h:ia', strtotime($post->created_at)) }}</p>
				</dl>

				<dl>
					<label>Last updated</label>
					<p>{{ date('j\'S M Y - h:ia', strtotime($post->updated_at)) }}</p>
				</dl>

				<hr>

				<div class="row">
					<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>

					<div class="col-sm-6">
					{!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}

					{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}

					{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						{{ Html::linkRoute('posts.index', '<< See All Posts', array(), array('class' => 'btn btn-default btn-block btn-h1-spacing')) }}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop