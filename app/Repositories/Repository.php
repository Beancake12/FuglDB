<?php

namespace App\Repositories;

class Repository implements RepositoryInterface
{
	protected $model;

	public function all()
	{
		return $this->model->all();
	}

	public function get(int $id) {
		try {
			return $this->model->findOrFail($id);
		} catch (\Throwable $th) {
			return null;
		}
	}

	public function delete(int $id) {
		try {
			$this->model->findOrFail($id)->delete();
			return true;
		} catch (\Throwable $th) {
			return false;
		}
	}
	
	public function create(array $data) {
		return $this->model->create($data);
	}
	
	public function update(array $data, int $id) {
		return $this->model->where('id', $id)->update($data);
	}
	
}