<?php

namespace App\Services;

use App\Repositories\BirdRepository;

class BirdService
{
	protected $birdRepository;
	
	function __construct(BirdRepository $birdRepository)
	{
		$this->birdRepository = $birdRepository;
	}

	public function create(array $data)
	{
		return $this->birdRepository->create($data);
	}

	public function all()
	{
		return $this->birdRepository->all();
	}
}