@extends('layouts.admin')

@section('title')
	{{ $title }}
@endsection

@section('header')
	@include('admin.header')
@endsection

@section('content')
	{!! Form::open([
			route(
				'portfolioEdit', 
				['portfolio'=>$portfolio->id]
			), 
			'class'=>'form-horizontal', 
			'method'=>'post', 
			'enctype'=>'multipart/form-data'
		]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name', ['class'=>'col-md-2']) !!}
		<div class="col-md-8">
			{!! Form::text('name', $portfolio->name, ['class'=>'form-control', 'placeholder'=>'Type title portfolio']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('filter', 'Filter name', ['class'=>'col-md-2']) !!}
		<div class="col-md-8">
			{!! Form::text('filter', $portfolio->filter, ['class'=>'form-control', 'placeholder'=>'Type filter portfolio']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('old_images', 'Image', ['class'=>'col-md-2']) !!}
		<div class="col-md-8">
			{!! Html::image('images/portfolio/' . $portfolio->images) !!}
			{!! Form::hidden('old_images', $portfolio->images) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('images', 'Image', ['class'=>'col-md-2']) !!}
		<div class="col-md-8">
			{!! Form::file('images', old('images'), ['class'=>'form-control']) !!}
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::submit('Edit portfolio', ['class'=>'btn btn-default']) !!}
		</div>
	</div>

	{!! Form::close() !!}
@endsection