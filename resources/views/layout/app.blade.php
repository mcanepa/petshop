	<div class="container-fluid">
		<div class="row flex-nowrap">
			<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
				@include("layout.partials.nav")
			</div>
			<div class="col py-3">
				@include("layout.partials.header")
				<main>
					@yield("content")
				</main>
			</div>
		</div>
	</div>
@include("layout.partials.footer")
