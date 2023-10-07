
@if(isset($pages) && is_object($pages))

	@foreach($pages as $k=>$page)
		@if($k%2 == 0)
			<section id="slider">
				{!! Html::image('images/'. $page->images) !!}
				<div class="text">
					<h2>{{ $page->name }}</h2>
					<p>{!! $page->text !!}</p>
					<a href="{{ route('page', ['alias' => $page->alias])}}">
						<button>READ MORE</button>
					</a>
				</div>
			</section>
		@else
			<section id="about">
				<div class="container">
					<p class="title">{{ $page->name }}</p>
					<div class="row">
						<div class="col-md-7">
							{!! $page->text !!}
							<p><a href="{{ route('page', ['alias' => $page->alias])}}#">Want to read more... </a></p>
						</div>
						<div class="col-md-5">
							{!! Html::image('images/'. $page->images) !!}
						</div>
					</div>
				</div>
			</section>
		@endif
	@endforeach

@endif

@if(isset($services) && is_object($services))
	<section id="services">
		<div class="container">
			<p class="title">SERVICES</p>
			@foreach($services as $k => $service)
				@if($k%3 == 0)
					<div class="row">	
				@endif

				<div class="col-md-4">
					<div class="box">
						<p>
							<i class="fa {{ $service->icon }}"></i>
						</p>
						<p>{{ $service->name }}</p>
						{!! $service->text !!}
					</div>
				</div>

				@if( ($k+1)%3 == 0)
					</div>
				@endif
			@endforeach
		</div>
	</section>
@endif
	
@if(isset($portfolios) && is_object($portfolios))
	<section id="portfolio">
		<div class="container">
			<p class="title">PORTFOLIO</p>

			@if(isset($filters))
			<nav class="navbar navbar-default">
	            <ul class="nav navbar-nav">
	            	<li class="active"><a href="#">ALL</a></li>
	            @foreach($filters as $filter)
		            <li><a href="#">{{ $filter->filter }}</a></li>
	            @endforeach
	            </ul>
		    </nav>
		    @endif
		    
		</div>

		@foreach($portfolios as $k => $portfolio)
			@if($k%4 == 0)
				<div class="row">
			@endif

			<div class="col-md-3">
				{!! Html::image('images/' . $portfolio->images) !!}
	    	</div>

	    	@if(($k+1)%4 == 0)
	    		</div>
	    	@endif
		@endforeach
	</section>
@endif

@if(isset($clients) && is_object($clients))
	<section id="clients">
		<p class="title">CLIENTS</p>
		<div class="brand-clients">
			<div class="container">
				<div>
					<div class="row">
					@foreach($clients as $client)
						<div class="col-md-3">
							<a href="#" title>
								{!! Html::image('images/' . $client->image, $client->name) !!}
							</a>	
						</div>
					@endforeach
					</div>
				</div>
			</div>
		</div>		
	</section> 
@endif
	
@if(isset($peoples) && is_object($peoples))
	<section id="team">
		<div class="container">
			<p class="title">TEAM</p>
			<p class="subtitle">Lorem ipsum dolor sit amet</p>
			<div class="row">
			@foreach($peoples as $people)
				<div class="col-md-4">
					{!! Html::image('images/' . $people->images, $people->name) !!}
					
					<ul class="social-network social-circle">
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
	                </ul>
					
					<div class="position">
						<p>{{ $people->name }}</p>
						{{ $people->position }}
					</div>
					{!! $people->text !!}
					
				</div>
			@endforeach
			</div>
		</div>
	</section>
@endif
	

<div id="contact">
	<div class="container">
		<p class="title">CONTACT US</p>
		<div class="row">
			<div class="col-md-5">
				<address>
				  <strong>Lorem ipsum</strong><br>
				  Lorem ipsum dolor sit amet
				</address>

				<address>
				  <strong>Lorem ipsum</strong><br>
				  Lorem ipsum dolor sit amet
				</address>

				<address>
				  <strong>Lorem ipsum</strong><br>
				  Lorem ipsum dolor sit amet
				</address>

				<ul class="social-network social-circle">
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
	            </ul>
			</div>
			<div class="col-md-7">
				<form action="{{ url('/') }}" method="post">
				  <div class="form-group">
				    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name *">
				  </div>
				  <div class="form-group">
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Your E-mail *">
				  </div>
				  <div class="form-group">
				     <textarea class="form-control" name="text" placeholder="Your Message *">
				  		
				  	</textarea>
				  </div>
				
				  <button type="submit" class="btn btn-danger">SEND MESSAGE</button>
				  {{ csrf_field() }}
				</form>
			</div>
		</div>
		<hr>
		<p>Copyright &copy; 2017 <a href="">Silvia</a></p>
	</div>
</div>