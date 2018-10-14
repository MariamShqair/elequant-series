<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\CompileReports;

class ReportsController extends Controller
{
    public function index(Request $request)
    {
    	
    	CompileReports::dispatch($request->reportId,$request->type);
    	return 'Done';
    }
}
