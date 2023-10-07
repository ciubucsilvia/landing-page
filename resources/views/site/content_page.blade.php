<section>
	<div class="container">
		<p class="title">{{ $page->name }}</p>
		<div class="row">
			<div class="col-md-7">
				{!! $page->text !!}

				{!! link_to(route('home'), 'Back') !!}
			</div>
			<div class="col-md-5">
				{!! Html::image('images/'. $page->images) !!}
			</div>
		</div>
	</div>
</section>