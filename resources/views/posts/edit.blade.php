@extends('layouts.main')

@section('title')Edit Post &bull; {{ config('app.name') }}@stop

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
					{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>

					<div class="col-sm-6">
					{!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success btn-block')) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop