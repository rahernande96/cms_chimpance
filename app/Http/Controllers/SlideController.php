<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    
    public function show(Request $request)
    {
        $lang = $request->input('lang');
        if (is_null($lang)) {
            $lang="es";
        }

        $imgs = Slide::lang($lang)->orderBy('organization','ASC')->get();
   
    	return view('slide.slide-show',['imgs'=>$imgs,'lang'=>$lang]);
    }

    public function create()
    {   
        $count = Slide::count();

        if ($count >= 6) 
        {
            $count=0;
        }
        else
        {
            $count=6-$count;
        }

        return view('slide.slide-create',['count'=>$count]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'slide' => 'file|mimes:webm,mp4,png,jpg,jpeg',
        ]);

    	$image = $request->file('slide');
    	
        Slide::create([
    		'url_image'=>$image->store('news','public'),
            'lang'=>'es',
    	]);

        if (Slide::count() >= 6) 
        {
            $count=0;
        }
        else{
            $count=1;
        }

        return \Response::json($count, 200);
    }

    public function destroy(Request $request)
    {
        $imgId = $request->input('id');

        $img = Slide::where('id',$imgId)->first(); 

        \Storage::disk('public')->delete($img->url_image);

        Slide::where('id',$imgId)->delete();

        return redirect()->route('news-show');

    }

    public function order(Request $request)
    {

        $orders = $request->order;

        Slide::lang($request->lang)->where('id','>',0)->update(['organization'=>null]);

        foreach ($orders as $order => $id) {
            if (!is_null($order)) {
               Slide::where('id',$id)->update(['organization'=>$order]);
            }
            
        }

        return redirect('/slides-show?lang='.$request->lang);
    }

    public function update(Request $request)
    {
        Slide::where('id',$request->input('id'))->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'btn_content' => $request->input('title-btn'),
            'btn_link' => $request->input('url'),
            'lang' => $request->input('lang'),
        ]);

        return redirect('/slides-show?lang='.$request->input('lang'));
    }
}
