<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocation;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use App\Services\LocationService;
use App\Models\Location;

class LocationController extends Controller
{
	protected $locationService;

	public function __construct(LocationService $locationService)
	{
		$this->locationService = $locationService;
	}

	public function create()
	{
		return view('location-create');
	}

	public function list()
	{
		$locations = $this->locationService->all();
		return view('location-list', compact('locations'));
	}

	public function store(StoreLocation $request) : Location
	{
		return $this->locationService->store($request->validated());
	}

	public function showLocations(int $id) : View
	{
		$location = $this->locationService->get($id);

		return view('location-show', compact('location'));
	}
}
