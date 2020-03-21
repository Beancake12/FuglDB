<?php

namespace App\Services;

class Service implements ServiceInterface
{
	protected $repository;

	public function all()
	{
		return $this->repository->all();
	}

	public function get($id) {
		return $this->repository->get($id);
	}

	public function delete($id) {
		return $this->repository->delete($id);
	}
	
	public function create(array $data) {
		return $this->repository->create($data);
	}
	
	public function update(array $data, $id) {
		return $this->repository->update($data);
	}
	
}