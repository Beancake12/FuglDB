<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocation;
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

	public function index()
	{
		return view('location');
	}

	public function table()
	{
		$locations = $this->all();
		return view('location-table', compact('locations'));
	}

	public function store(StoreLocation $request) : Location
	{
		return $this->locationService->store($request->validated());
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
