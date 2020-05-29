<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Services\LocationService;
use App\Models\Location;

class LocationController extends Controller
{
	protected $locationService;

	public function __construct(LocationService $locationService)
	{
		$this->locationService = $locationService;
	}

	public function create(Request $request) : Location
	{
		$validatedData = $request->validate([
			'adress' => ['nullable', 'string', 'required_without:latitude,longitude'],
			'city' => ['nullable', 'string', 'required_without:latitude,longitude'],
			'zip' => ['nullable', 'digits:4', 'required_without:latitude,longitude'],
			'latitude' => ['nullable', 'required_without:adress,city,zip'],
			'longitude' => ['nullable', 'required_without:adress,city,zip'],
		]);

		return $this->locationService->create($validatedData);
	}

	public function all() : Collection
	{
		return $this->locationService->all();
	}

	public function get(int $id) : ?Location
	{
		return $this->locationService->get($id);
	}
}
