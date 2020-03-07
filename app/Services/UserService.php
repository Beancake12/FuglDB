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

	public function test()
	{
		return $this->userRepository->all();
	}
}