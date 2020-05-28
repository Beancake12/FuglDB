<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BirdService;

class BirdController extends Controller
{
	protected $birdService;

	public function __construct(BirdService $birdService)
	{
		$this->birdService = $birdService;
	}

	public function index()
	{
		return view('bird');
	}

	public function create(Request $request)
	{
		$bird = $this->birdService->create($request->all());
		$bird->locations()->create($request->all());

		return $bird;
	}

	public function delete(int $id)
	{
		return $this->birdService->delete($id);
	}

	public function get(int $id)
	{
		return $this->birdService->get($id);
	}

	public function all()
	{
		return $this->birdService->all();
	}
}
