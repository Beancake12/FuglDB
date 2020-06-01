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

	public function table()
	{
		$birds = $this->all();
		return view('bird-table', compact('birds'));
	}

	public function store(StoreBird $request) : Bird
	{
		$validatedData = $request->validated();
		$bird = $this->birdService->store($validatedData);
		
		if($validatedData['location_id'] && $bird) {
			$bird->locations()->attach($validatedData['location_id']);
		}

		return $bird;
	}

	public function delete(int $id) : bool
	{
		return $this->birdService->delete($id);
	}

	public function get(int $id) : ?Bird
	{
		return $this->birdService->get($id);
	}

	public function all() : Collection
	{
		return $this->birdService->all();
	}
}
