<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() 
	{
		return view('welcome');
	}   

    public function about() 
	{
		return view('about');
	}    

    public function trackorder() 
	{
		return view('trackorder');
	}   	

    public function contactus() 
	{
		return view('contactus');
	}   	
}
