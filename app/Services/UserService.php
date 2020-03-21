<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends Service
{
	function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}
}