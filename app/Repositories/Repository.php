<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Repository implements RepositoryInterface
{
	protected $model;

	public function all()
	{
		return $this->model->all();
	}

	public function get($id) {
		return $this->model->get($id);
	}

	public function delete($id) {
		return $this->model->delete($id);
	}
	
	public function create(array $data) {
		return $this->model->create($data);
	}
	
	public function update(array $data, $id) {
		return $this->model->where('id', $id)->update($data);
	}
	
}