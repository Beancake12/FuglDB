<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BirdService;
use App\Services\LocationService;

use App\Models\Location;


class BirdController extends Controller
{
	protected $birdService;

	public function __construct(BirdService $birdService, LocationService $locationService)
	{
		$this->birdService = $birdService;
		$this->locationService = $locationService;
	}

	public function index()
	{
		return view('bird');
	}

	public function create(Request $request)
	{
		$bird = $this->birdService->create($request->all());
		$location = $bird->locations()->create($request->all());

		return $bird;
	}

	public function all()
	{
		return $this->birdService->all();
	}
}
