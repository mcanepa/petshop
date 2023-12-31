@extends("layout.app")

@section("content")

<a href="{{ route('pets.create') }}">
	<button>+ Crear registro</button>
</a>

@if($pets->count())
<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Fecha de nacimiento</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pets as $pet)
		<tr>
			<td>{{$pet->name}}</td>
			<td>{{\Carbon\Carbon::parse($pet->birthday)->format("d/m/Y")}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
	<div>No hay registros...</div>
@endif

@endsection
