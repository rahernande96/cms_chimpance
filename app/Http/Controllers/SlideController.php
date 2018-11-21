<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    
    public function show()
    {
        $imgs = Slide::orderBy('organization','ASC')->get();
        
    	return view('slide.slide-show',['imgs'=>$imgs]);
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

        Slide::where('id','>',0)->update(['organization'=>null]);

        foreach ($orders as $order => $id) {
            if (!is_null($order)) {
               Slide::where('id',$id)->update(['organization'=>$order]);
            }
            
        }

        return redirect()->route('news-show');   
    }

    public function update(Request $request)
    {
        Slide::where('id',$request->input('id'))->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'btn_content' => $request->input('title-btn'),
            'btn_link' => $request->input('url')
        ]);

        return redirect()->route('news-show');
    }
}
