<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\ArticleController;

class HomeController extends Controller 
{

    public function index(Request $request) 
    {	
        return view('home');
    }

    public function newsletter(Request $request) 
    {
        if ($request->isMethod('post')) {
            $message = '';
            $inputArr = [
                filter_var($request->input('firstname'), FILTER_SANITIZE_STRING),
                filter_var($request->input('lastname'), FILTER_SANITIZE_STRING),
                filter_var($request->input('email'), FILTER_SANITIZE_EMAIL),
            ];

            $emails = DB::table('newsletter')->where('email', $inputArr[2])->get();

            if (count($emails) == 0) {
                DB::insert('INSERT INTO newsletter (firstname, lastname, email) VALUES (?,?,?)', $inputArr);
                $message = 'Success';
            }
            else {
                $message = 'Email already exists';
            }

            return $message;
        }
    }

}