<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Category;
use Auth;

class MainController extends Controller
{
    public function index(Request $request){
        $productsQuery = Product::query();

        if($request->filled('price_from')){
            $productsQuery->where('price','>=',$request->price_from);
        }

        if($request->filled('price_to')){
            $productsQuery->where('price','<=',$request->price_to);
        }

        $products = $productsQuery->paginate(6);
        return view('index',['products'=>$products]);
    }

// categories
    public function categories(){
    	$categories = Category::get();
    	return view('categories',['categories'=>$categories]);
    }
    public function category($code){
        $category = Category::where('code',$code)->first();
        $products = Product::where('category_id',$category->id)->get();

        return view('category',compact('category','products'));
    }

    // Product
    public function product($category,$productCode){
        $product = Product::where('code',$productCode)->first();
        return view('product', ['product' => $product]); 
    }
}