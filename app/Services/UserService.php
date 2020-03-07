<?php

namespace App\Services;

use App\Repositories\UserRepository;

/**
 * 
 */
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
}