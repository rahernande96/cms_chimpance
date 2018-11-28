<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Notifications\Contact;
use Illuminate\Support\Facades\Notification;
use Validation;
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

    public function contact(Request $request)
    {
        $request->validate([
            'contactName'=>'required',
            'contactEmail'=>'required',
            'contactSubject'=>'required',
            'contactMessage'=>'required',
        ]);

        $contact = [
            'name'=>$request->input('contactName'),
            'email'=>$request->input('contactEmail'),
            'subject'=>$request->input('contactSubject'),
            'message'=>$request->input('contactMessage'),
        ];

        Notification::route('mail', 'sprados@chimpancedigital.com.ar')
                    ->notify(new Contact($contact));

        $lang = session('locale');
        if(empty($lang))
        {
            $lang = \Config::get('app.locale');
        }

        if ($lang == 'es') {
            
            return '<div class="alert alert-success">Mensaje enviado Exitosamente</div>';
        }
        else {
            return '<div class="alert alert-success">Message sent successfully</div>';
        }
             
    }
}
