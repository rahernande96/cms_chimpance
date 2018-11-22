<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class IndexController extends Controller
{
    public function index()
    {
    	$banners = Slide::orderBy('organization','ASC')->get();

    	return view('index',['banners'=>$banners]);
    }
}
