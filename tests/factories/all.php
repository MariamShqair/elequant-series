<?php

$factory('App\User',[

	'name' => $faker->name,
	'email'	=>$faker->email,
	'password' =>bcrypt('password')


]);

$factory('App\Post',[
	'user_id' => 'factory:App\User',
	'title'	=> $faker->sentence,
	'body'	=>$faker->paragraph


]);

$factory('App\Comment', [

	'post_id' =>'factory:App\Post',
	'body' 	  =>$faker->paragraph

]);
$factory('App\test', [

	
	'name' 	  =>$faker->word

]);
$factory('App\Order', [

	
	'order_name' 	  =>$faker->word,
	'order_number'	  =>$faker->randomNumber()

]);