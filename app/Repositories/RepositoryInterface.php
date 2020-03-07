<?php

namespace App\Repositories;

interface RepositoryInterface
{
	public function all();
	public function get($id);
	public function delete($id);
	public function create(array $data);
	public function update(array $data, $id);
}