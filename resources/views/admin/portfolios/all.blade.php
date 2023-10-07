@extends('layouts.admin')

@section('title')
	{{ $title }}
@endsection

@section('header')
	@include('admin.header')
@endsection

@section('content')
	{!! Html::link(route('portfolioAdd'), 'Create Portfolio', ['alt' => 'Create portfolio', 'class' => 'btn btn-default']) !!}
	<br><br>

	@if($portfolios)
		<table class="table">
			<tr>
				<th>Nr.</th>
				<th>Name</th>
				<th>Filter</th>
				<th>Date created</th>
				<th>Delete</th>
			</tr>
			@foreach($portfolios as $portfolio)
				<tr>
					<td>{{ $portfolio->id }}</td>
					<td>
						{{ Html::link(route('portfolioEdit', ['portfolio'=>$portfolio->id]), $portfolio->name) }}
					</td>
					<td>{{ $portfolio->filter }}</td>
					<td>{{ $portfolio->created_at }}</td>
					<td>
						{!! Form::open(['url'=>route('portfolioEdit', ['portfolio' => $portfolio->id]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
						
						{{ method_field('DELETE') }}
						
						{!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
					{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</table>
	@endif
@endsection

