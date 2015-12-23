<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('store.index');
    }
    public function getAllProducts()
    {
        $products = Product::paginate(12);
        return view('store.all-product-list')->with('products', $products);
    }
    public function getAbout()
    {
        return view('store.about');
    }
    public function getServices()
    {
        return view('store.services');
    }
    public function getContact()
    {
        return view('store.contact');
    }

    public function getEditProduct($id)
    {
        $product = Product::find($id);
        return view('store/view-product')->with('product', $product);
    }
    public function getCategory($id)
    {
        $products = DB::table('products')->where('category_id','=', $id)->get();
        return view('store/all-product-list')->with('products', $products);
    }


}
