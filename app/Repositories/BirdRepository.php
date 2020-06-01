<?php

namespace App\Repositories;

use App\Models\Bird;
use Illuminate\Database\Eloquent\Collection;

class BirdRepository extends Repository
{
	function __construct(Bird $bird)
	{
		$this->model = $bird;
	}

	public function allWithLocations() : Collection
	{
		return $this->model->with('locations')->get	();
	}

	public function getWithLocations(int $id) : ?Bird
	{
		return $this->model->where('id', $id)->with('locations')->first();
	}
}