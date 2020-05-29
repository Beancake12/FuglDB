<?php

namespace App\Services;

interface ServiceInterface
{
	public function all();
	public function get(int $id);
	public function delete(int $id);
	public function create(array $data);
	public function update(array $data, int $id);
}