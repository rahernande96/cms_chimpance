<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class IndexController extends Controller
{
    public function index()
    {
        $lang = \Config::get('app.locale');
        //dd($lang);
    	$banners = Slide::lang($lang)->orderBy('organization','ASC')->get();

    	return view('index',['banners'=>$banners]);
    }

    public function locale(Request $request)
    {

    	session()->put('locale',$request->input('lang'));
    	
    	return back();
    }
}
