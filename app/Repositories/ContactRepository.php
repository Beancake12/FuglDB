<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository extends Repository
{
	function __construct(Contact $contact)
	{
		$this->model = $contact;
	}
}