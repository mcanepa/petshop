@extends("layout.app")

@section("content")

<form action="{{ route('pets.store') }}" method="post">
@csrf
	<div>
		<label>Nombre: </label>
		<input type="text" name="name" value="{{ old('name') }}">
	</div>
	<div>
		<label>Edad: </label>
		<input type="date" name="birthday" value="{{ old('birthday') }}">
	</div>
	<div>
		<button type="submit">Guardar</button>
	</div>
</form>
@endsection
