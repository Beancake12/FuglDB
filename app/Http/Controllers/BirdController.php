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

	public function create(Request $request)
	{
		return $this->birdService->create($request->all());
	}

	public function all()
	{
		return $this->birdService->all();
	}
}
