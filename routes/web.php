<?php
use App\User;
Auth::loginUsingId(1);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('config', function(){
   //fetch configaration repository
	//=========================
	//dd(Config::get(['database','app']));
	//dd(app('Illuminate\Contracts\Config\Repository')['database']['default']);
	//dd(app('Illuminate\Config\Repository')['database']['default']);
	//dd(app('config')['database']['default']);

	dd(app()['config']['database']['default']);
});
Route::get('test','WelcomeController@test');
Route::get('event/{orderId}','OrderController@ship');

Route::get('pass',function(){

	//dd(Hash::make('password'));
	//dd(bcrypt('password'));

	//dd(app('hash')->make('password'));
	//dd(app()['hash']->make('password'));
	//dd(app('Illuminate\Hashing\BcryptHasher')->make('password'));

	dd(app('Illuminate\Contracts\Hashing\Hasher')->make('password'));


});
Route::get('/',function(){
	$user = auth()->user()->name;

   	return view('welcome',$user);

});

//video 7 intermediate laravel
// Route::get('login',function(){
// 	$user = App\User::forceCreate([
// 			'name' =>'mariamShqair',
// 			'email'=>'mariamshqair@gmail.com',
// 			'password'=>bcrypt('password')]

// 	);
// 	Auth::login($user);
// 	return redirect('/');

// });

// Route::get('testSub',['middleware'=>'subscribed',function(){

// 	return 'subscribtion only page';
// }]);


Route::get('login',function(){
	
	$user = User::forceCreate([
		'name' =>'mariam',
		'email' =>'mary@gmail.com',
		'password'=>bcrypt('password'),
		'plan' =>'yearly'

	]);

	Auth::login($user);
	return redirect('/');


}


);

Route::get('testplan',['middleware'=>'subscribeWithYearlyPlan:yearly',function()
{
	return 'you can see this page only if you are login in , and subscribed to the yearly plane';
}]);

Route::get('reports','ReportsController@index');

Route::get('video','VideoController@index');

Route::post('completion','CompletionsController@store');
Route::get('grid',function(){
	return view('grid');
});
Route::get('gridArea',function(){
	return view('gridAria');
});
Route::get('fraction',function(){
	return view('gridFraction');
});
Route::get('nested',function(){
	return view('nested');
});
Route::get('confusingAutoFit',function(){
	return view('confusingAutoFit');
});
Route::get('mariamcv',function(){
	return view('mariamcv');
});