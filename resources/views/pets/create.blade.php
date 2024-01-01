@extends("layout.app")

@section("content")

<form action="{{ route('pets.store') }}" method="post">
@csrf
	<div class="mb-3">
		<label class="form-label">Nombre: </label>
		<input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
	</div>
	<div class="mb-3">
		<label class="form-label">Fecha de nacimiento:<input type="radio" name="age_type" value="exact" @if(old('age_type') == 'exact' || !old('age_type')) checked='checked' @endif></label>
		&nbsp&nbsp&nbsp
		<label class="form-label">Edad aproximada:<input type="radio" name="age_type" value="approximate" @if(old('age_type') == 'approximate') checked='checked' @endif></label>

		<div id="age_exact">
			<input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday') }}" required>
		</div>
		<div id="age_approximate">
		<div class="row">
			<div class="form-group col-md-6">
				<label class="form-label">Tiempo: </label>
				<input type="number" min="1" max="100" name="age_quantity" id="age_quantity" value="{{ old('age_quantity') ?? 1 }}" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label class="form-label">Periodo: </label>
				<select id="age_period" class="form-control">
					<option value="d" selected>día(s)</option>
					<option value="w">semana(s)</option>
					<option value="m">mes(es)</option>
					<option value="y">año(s)</option>
				</select>
			</div>
		</div>
		</div>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</form>

<style>
	#age_approximate
	{
		display: none;
	}
</style>

<script>
	const birthday = document.getElementById("birthday");
	const age_type = document.querySelectorAll("input[name=age_type]");
	const age_quantity = document.getElementById("age_quantity");
	const age_period = document.getElementById("age_period");

	birthday.value = new Date().toISOString().split("T")[0];

	function calcDate()
	{
		const currentDate = new Date();

		switch(age_period.value)
		{
			case "d":

				currentDate.setDate(currentDate.getDate() - age_quantity.value);

				break;

			case "w":

				currentDate.setDate(currentDate.getDate() - age_quantity.value * 7);

				break;

			case "m":

				currentDate.setMonth(currentDate.getMonth() - age_quantity.value);

				if(currentDate.getDate() > new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate())
				{
					currentDate.setDate(0);
				}
				else
				{
					currentDate.setDate(currentDate.getDate());
				}

				break;

			case "y":

				currentDate.setFullYear(currentDate.getFullYear() - age_quantity.value);

				break;
		}

		birthday.value = currentDate.toISOString().split("T")[0];
	}

	age_quantity.addEventListener("change", function(e)
	{
		if(this.value < 1)
		{
			this.value = 1;
		}

		calcDate();
	});

	age_period.addEventListener("change", function(e)
	{
		calcDate();
	});

	age_type.forEach(function(element)
	{
		element.addEventListener("click", function(e)
		{
			switch(this.value)
			{
				case "exact":

					document.getElementById("age_exact").style.display = "block";
					document.getElementById("age_approximate").style.display = "none";

					break;

				case "approximate":

					document.getElementById("age_exact").style.display = "none";
					document.getElementById("age_approximate").style.display = "block";

					break;
			}
		});
	});

	document.getElementsByName("age_type").forEach(function(element)
	{
		if(element.checked)
		{
			element.click();
		}
	});
</script>

@endsection
