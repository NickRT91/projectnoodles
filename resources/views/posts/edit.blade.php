@extends('layouts.main')

@section('title')Edit Post &bull; {{ config('app.name') }}@stop

@section('content')
	<div class="row">
		{{ Form::model($post, ['route' => ['posts.update', $post->id]]) }}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ form::text('title', null, ['class' => 'form-control input-lg']) }}
			
			{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
					{{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div> <!-- end of .row -->
@stop