@extends('layouts.admin')

@section('title')
	{{ $title }}
@endsection

@section('header')
  @include('admin.header')
@endsection

@section('content')
  
  {!! Form::open(['url'=>route('pageAdd'), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

     <div class="form-group">
      {!! Form::label('name', 'Name', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Type title page']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('alias', 'Alias', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::text('alias', old('alias'), ['class'=>'form-control', 'placeholder'=>'Type alias page']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('text', 'Text', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::textarea('text', old('text'), ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Type text page']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('images', 'Image', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::file('images', old('images'), ['class'=>'form-control', 'placeholder'=>'Type text page']) !!}
      </div>
    </div>

    {!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}

  {!! Form::close() !!}
  
  <script>
      CKEDITOR.replace('editor');
  </script>

@endsection