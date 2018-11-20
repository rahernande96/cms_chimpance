<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Product;
use App\Category;

class ProductController extends Controller
{
	public function show()
    {
        $categories = Category::all();

        $productsAll = Product::with('categories')->orderBy('organization','ASC')->get();

    	return view('productos.productos-show',[
            'productsAll'=>$productsAll,
            'categories'=>$categories,
        ]);
    }

    public function create()
    {
    	return view('productos.productos-create');
    }

    public function store (Request $request)
    {
    	$category = Category::where('name',$request->category)->first();
    	
    	$image = $request->file('img');
        
    	Product::create([
    		'url_image' => $image->store('products','public'),
    		'organization' => null,
    		'category_id'=>$category->id,
    	]);
        
    	return \Response::json($request->category, 200);
    }

    public function destroy(Request $request)
    {
        $proId = $request->id;

        $product = Product::where('id',$proId)->first(); 

        Storage::disk('public')->delete($product->url_image);

        Product::where('id',$proId)->delete();

        return redirect()->route('product-show');

    }

    public function order(Request $request)
    {
        $orders = $request->order;

        if (!empty($orders)) {
          foreach ($orders as $order => $id) {
            if (!is_null($order)) {
               Product::where('id',$id)->update(['organization'=>$order]);
            }
            
          }
          return \Response::json($orders, 200);
        }

        return \Response::json("empty", 200);

        
    } 
}
