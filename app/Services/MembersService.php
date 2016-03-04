<?php

namespace App\Services;
use App\Models\Member;

class MembersService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Member $member) {
		$this->member = $member;
	}

	public function getAllMembers()
	{
		return $this->member->get();
	}

	public function getMemberById($id)
	{
		return $this->member->find($id);
	}

	public function create($inputs)
	{
		return $this->member->create($inputs);
	}
}