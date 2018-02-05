<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    
	public function index(){

		$users = [

			"0"=>[
				"first_name"=>"Ryotsu",
				"last_name"=>"Namikaze",
				"location"=>"Tokyo"
			],
			"1"=>[
				"first_name"=>"Rico",
				"last_name"=>"Mitsuba",
				"location"=>"Tokyo"
			]

		];

		return view('admin.users.index', compact('users'));

	}

}
