<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\MembersService;

class MembersController extends Controller
{
    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct(MembersService $memberService)
    {
        $this->middleware('auth');
        $this->memberService = $memberService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $members = $this->memberService->getAllMembers();
        return view('admin.members.index', ['members' => $members]);
    }
}
