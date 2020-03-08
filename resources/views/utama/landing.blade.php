@extends('utama.index')

@selection('title', 'Halaman Utama')

@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<i style="font-size: 150px" class="fa fa-address-book text-center"></i>
			<div class="card-body">
				<h5 class="card-title">Card titel</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<i style="font-size: 150px " class="fa text-center">&#xf19c;</i>
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<i style="font-size: 150px " class="fa text-center">&#xf0e4;</i>
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>
</div>

@endsection

