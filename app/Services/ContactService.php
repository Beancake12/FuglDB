<?php

namespace App\Services;

use App\Repositories\ContactRepository;

class ContactService extends Service
{
	function __construct(ContactRepository $repository)
	{
		$this->repository = $repository;
	}
}