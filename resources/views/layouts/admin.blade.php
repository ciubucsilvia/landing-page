<!DOCTYPE html>
<html>
<head>
	<title>@Yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">

	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
<header>
	@yield('header')
</header>
<div class="container">

<!-- Erors and Messages -->
  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif

	<div class="row">
		<div class="col-md-12">
			<h1>@Yield('title')</h1>
			@yield('content')
		</div>
	</div>
</div>
<footer>
  
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>