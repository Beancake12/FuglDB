<?php

namespace App\Services;

use App\Models\Bird;
use App\Repositories\BirdRepository;
use Illuminate\Database\Eloquent\Collection;

class BirdService extends Service
{	
	function __construct(BirdRepository $repository)
	{
		$this->repository = $repository;
	}

	public function allWithLocations() : Collection
	{
		return $this->repository->allWithLocations();
	}

	public function getWithLocations(int $id) : ?Bird
	{
		return $this->repository->getWithLocations($id);
	}
}