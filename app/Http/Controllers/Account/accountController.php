<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class accountController extends Controller
{
    
	public function index($id)
	{

		$user = User::find($id)->first();


		return view('account.account')->with('user', $user);

	}


}
