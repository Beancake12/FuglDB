<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LocationService;

class LocationController extends Controller
{
	protected $locationService;

	public function __construct(LocationService $locationService)
	{
		$this->locationService = $locationService;
	}

	public function create(Request $request)
	{
		return $this->locationService->create($request->all());
	}

	public function all()
	{
		return $this->locationService->all();
	}

	public function get($id)
	{
		return $this->locationService->get($id);
	}
}
