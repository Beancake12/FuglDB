<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
	private $userRepository;

	function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function all()
	{
		return $this->userRepository->all();
	}

	public function create(array $data)
	{
		return $this->userRepository->create($data);
	}
}