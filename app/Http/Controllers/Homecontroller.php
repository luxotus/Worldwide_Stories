<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ArticleController;

class HomeController extends Controller 
{

    public function index() 
    {	
    	// $viewData = [
    	// 	'miniArticleData' => $miniArticleData,
    	// 	'pageTitle' => $this->getPageTitle(),
    	// 	'subNav' => $subNav,
    	// 	'allDataTypes' => $allDataTypes
    	// ];

     //    return view('home', $viewData);
        return view('home');
    }

}