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
					<dt>Created at</dt>
					<dd>{{ date('l j\'S F, Y - h:ia e', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl>
					<dt>Last updated</dt>
					<dd>{{ date('l j\'S F, Y - h:ia e', strtotime($post->updated_at)) }}</dd>
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