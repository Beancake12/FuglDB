<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBird;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use App\Services\BirdService;
use App\Models\Bird;
use App\Services\LocationService;

class BirdController extends Controller
{
	protected $birdService;
	protected $locationService;

	public function __construct(BirdService $birdService, LocationService $locationService)
	{
		$this->birdService = $birdService;
		$this->locationService = $locationService;
	}

	public function create() : View
	{
		$locations = $this->locationService->all();
		return view('bird-create', compact('locations'));
	}

	public function list() : View
	{
		$birds = $this->birdService->allWithLocations();
		
		return view('bird-list', compact('birds'));
	}

	public function store(StoreBird $request) : Bird
	{
		$validatedData = $request->validated();

		// Cast dead to bool
		if(isset($validatedData['dead'])) {
			$validatedData['dead'] = (Boolean) $validatedData['dead'];
		}

		// Store bird
		$bird = $this->birdService->store($validatedData);
		
		// Attach location
		if($validatedData['location_id'] && $bird) {
			$bird->locations()->attach($validatedData['location_id']);
		}

		return $bird;
	}

	public function showBird(int $id) : View
	{
		$bird = $this->birdService->getWithLocations($id);

		return view('bird-show', compact('bird'));
	}

	public function delete(int $id) : bool
	{
		return $this->birdService->delete($id);
	}
}
