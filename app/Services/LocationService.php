<?php

namespace App\Services;

use App\Repositories\LocationRepository;

class LocationService extends Service
{
	function __construct(LocationRepository $repository)
	{
		$this->repository = $repository;
	}
}