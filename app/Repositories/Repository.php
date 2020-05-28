<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{
	protected $model;

	public function all()
	{
		return $this->model->all();
	}

	public function get($id) {
		try {
			return $this->model->findOrFail($id);
		} catch (\Throwable $th) {
			return 'No record found';
		}
	}

	public function delete($id) {
		try {
			$this->model->findOrFail($id)->delete();
			return 'Record deleted';
		} catch (\Throwable $th) {
			return 'No record found';
		}
	}
	
	public function create(array $data) {
		return $this->model->create($data);
	}
	
	public function update(array $data, $id) {
		return $this->model->where('id', $id)->update($data);
	}
	
}