<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;

//use Config;
class WelcomeController extends Controller
{
	// protected $config;

 // 	public function __construct(Repository $config)
 // 	{
 // 		$this->config = $config;
 // 	}
	public function test(){//Repository $config

	//	return Config::get('database.default');
		return config('database.default');
	}



 }
