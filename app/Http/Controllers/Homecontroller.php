<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ArticleController;

class HomeController extends Controller 
{

    public function index(Request $request) 
    {	
        return view('home');
    }

    public function newsletter(Request $request) {
        if ($request->isMethod('post')) {
            return json_encode($request->all());
        }
    }

}