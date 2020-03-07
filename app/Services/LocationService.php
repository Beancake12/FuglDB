<?php

namespace App\Services;

use App\Repositories\LocationRepository;

class LocationService
{
	protected $locationRepository;

	function __construct(LocationRepository $locationRepository)
	{
		$this->locationRepository = $locationRepository;
	}

	public function create(array $data)
	{
		return $this->locationRepository->create($data);
	}
}