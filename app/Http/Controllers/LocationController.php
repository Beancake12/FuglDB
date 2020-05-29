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
		return $this->locationService->create($request->all());
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
