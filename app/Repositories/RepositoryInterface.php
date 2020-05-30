<?php

namespace App\Repositories;

interface RepositoryInterface
{
	public function all();
	public function get(int $id);
	public function delete(int $id);
	public function store(array $data);
	public function update(array $data, int $id);
}