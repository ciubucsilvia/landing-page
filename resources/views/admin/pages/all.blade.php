@extends('layouts/admin')

@section('title')
	{{ $title }}
@endsection

@section('header')
	@include('admin.header')
@endsection

@section('content')
	{!! Html::link(route('pageAdd'), 'Create page', ['alt'=> 'Create page', 'class'=>'btn btn-default']) !!}	
	<br><br>
	
	@if($pages)
		<table class="table">
			<tr>
				<th>Nr: </th>
				<th>Name</th>
				<th>Alias</th>
				<th>Date created</th>
				<th>Image</th>
				<th>Text</th>
				<th>Delete</th>
			</tr>
			@foreach($pages as $page)
				<tr>
					<td>{{ $page->id }}</td>
					<td>{!! Html::link(route('pageEdit', ['page' => $page->id]), $page->name, ['alt'=> $page->name, 'title' => $page->name]) !!}</td>
					<td>{{ $page->alias }}</td>
					<td>{{ $page->created_at }}</td>
					<td>{{ $page->image }}</td>
					<td>{!! $page->text !!}</td>
					<td>
					{!! Form::open(['url'=>route('pageEdit', ['page' => $page->id]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
						<!-- {!! Form::hidden('_method', 'delete') !!} -->
						{{ method_field('DELETE') }}
						
						{!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
					{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</table>
	@endif
@endsection