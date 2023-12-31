@extends("layout.app")

@section("content")

<form action="{{ route('pets.store') }}" method="post">
@csrf
	<div class="mb-3">
		<label class="form-label">Nombre: </label>
		<input type="text" name="name" class="form-control" value="{{ old('name') }}">
	</div>
	<div class="mb-3">
		<label class="form-label">Edad: </label>
		<input type="date" name="birthday" class="form-control" value="{{ old('birthday') }}">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</form>
@endsection
