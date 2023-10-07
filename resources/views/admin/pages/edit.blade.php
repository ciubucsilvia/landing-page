@extends('layouts.admin')

@section('title')
	{{ $title }}
@endsection

@section('header')
  @include('admin.header')
@endsection

@section('content')
  
  {!! Form::open(['url'=>route('pageEdit', ['pages'=>$data['id']]), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

     <div class="form-group">
     {!! Form::hidden('id', $data['id']) !!}
      {!! Form::label('name', 'Name', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::text('name', $data['name'], ['class'=>'form-control', 'placeholder'=>'Type title page']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('alias', 'Alias', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::text('alias', $data['alias'], ['class'=>'form-control', 'placeholder'=>'Type alias page']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('text', 'Text', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::textarea('text', $data['text'], ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Type text page']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('old_images', 'Image', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
      {!! Html::image('images/' . $data['images']) !!}
      {!! Form::hidden('old_images', $data['images']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('images', 'Image', ['class'=>'col-xs-2']) !!}
      <div class="col-xs-8">
        {!! Form::file('images', ['class'=>'form-control', 'placeholder'=>'Type text page']) !!}
      </div>
    </div>

    {!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}

  {!! Form::close() !!}
  
  <script>
      CKEDITOR.replace('editor');
  </script>

@endsection