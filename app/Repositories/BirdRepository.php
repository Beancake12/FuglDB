<?php

namespace App\Repositories;

use App\Models\Bird;

class BirdRepository extends Repository
{
	function __construct(Bird $bird)
	{
		$this->model = $bird;
	}
}