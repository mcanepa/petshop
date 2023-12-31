<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
	public function index(Request $request)
	{
		$pets = Pets::paginate(10);

		return view("pets.index", compact("pets"));
	}

	public function create()
	{
		return view("pets.create");
	}

	public function store(Request $request)
	{
		try
		{
			$request->validate([
				'name' => 'required|string',
				'birthday' => 'required|date|before:tomorrow|date_format:Y-m-d',
			]);

			$pet = new Pets;

			$pet->create($request->all());

			return redirect()->route("pets.index")->withSuccess("Mascota creada correctamente!");
		}
		catch(\Exception $e)
		{
			return back()->withInput()->withErrors("Hubo un error: " . $e->getMessage());
		}
	}
}
