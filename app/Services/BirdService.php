<?php

namespace App\Services;

use App\Repositories\BirdRepository;

class BirdService extends Service
{	
	function __construct(BirdRepository $repository)
	{
		$this->repository = $repository;
	}
}