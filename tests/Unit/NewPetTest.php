<?php

namespace Tests\Unit;

use App\Http\Controllers\PetsController;
// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class NewPetTest extends TestCase
{
	// use RefreshDatabase;

	public function testStoreWithMissingData(): void
	{
		$controller = new PetsController();

		$requestData = [];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
	}

	public function testStoreWithMissingName(): void
	{
		$controller = new PetsController();

		$requestData = [
			"birthday" => date("Y-m-d")
		];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
		$this->assertStringContainsString("name", session("errors")->first());
	}

	public function testStoreWithMissingBirthday(): void
	{
		$controller = new PetsController();

		$requestData = [
			"name" => "Firulais",
		];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
		$this->assertStringContainsString("birthday", session("errors")->first());
	}

	public function testStoreWithWrongTypeForName(): void
	{
		$controller = new PetsController();

		$requestData = [
			"name" => 5,
			"birthday" => date("Y-m-d")
		];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
		$this->assertStringContainsString("name", session("errors")->first());
	}

	public function testStoreWithWrongTypeForBirthday(): void
	{
		$controller = new PetsController();

		$requestData = [
			"name" => "Firulais",
			"birthday" => 123
		];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
		$this->assertStringContainsString("birthday", session("errors")->first());
	}

	public function testStoreWithWrongFormatForBirthday(): void
	{
		$controller = new PetsController();

		$requestData = [
			"name" => "Firulais",
			"birthday" => date("d/m/Y")
		];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
		$this->assertStringContainsString("birthday", session("errors")->first());
	}

	public function testStoreWithBirthdayInTheFuture(): void
	{
		$controller = new PetsController();

		$requestData = [
			"name" => "Firulais",
			"birthday" => date("Y-m-d", strtotime("+1 days"))
		];

		$request = new Request($requestData);

		$response = $controller->store($request);

		$this->assertEquals(302, $response->status());
		$this->assertNotEmpty(session("errors"));
		$this->assertStringContainsString("birthday", session("errors")->first());
	}
}
