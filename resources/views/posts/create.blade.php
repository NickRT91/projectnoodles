@extends('layouts.main')

@section('title')Create Post &bull; {{ config('app.name') }}@stop

@section('stylesheets')
	{!! Html::style('/css/parsley.css') !!}
@stop

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('body', 'Post Body:', array('style' => 'margin-top: 20px;')) }}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
@stop

@section('scripts')
	{!! Html::script('/js/parsley.min.js') !!}
@stop