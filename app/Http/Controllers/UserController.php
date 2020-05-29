<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Services\UserService;

class UserController extends Controller
{
	protected $userService;

	public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function all() : Collection
    {
    	return $this->userService->all();
    }
}
