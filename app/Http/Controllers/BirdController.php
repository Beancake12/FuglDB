<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use App\Services\BirdService;
use App\Models\Bird;

class BirdController extends Controller
{
	protected $birdService;

	public function __construct(BirdService $birdService)
	{
		$this->birdService = $birdService;
	}

	public function index() : View
	{
		return view('bird');
	}

	public function create(Request $request) : Bird
	{
		$validatedData = $request->validate([
			'name' => ['required', 'string'],
			'ring' => ['nullable', 'string'],
			'dead' => ['nullable', 'bool'],
		]);
		
		return $this->birdService->create($validatedData);
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
