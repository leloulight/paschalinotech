<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Validator;

class ProductController extends Controller {

    public function index()
    {
        $products = Product::paginate(10);
        return view('product/product-list')->with('products', $products);

    }

    public function create()
    {
        return view('product/product-list');
        //'product/add-new-product'
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:250'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $product = new Product;
        $category_id = DB::table('categories')->where('name', $request->input('category'))->value('id');
        $file = $request->file('userfile');
        $destination_path = 'uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        $file_path= $destination_path . $filename;
        $imagine = new Imagine();
        $mode = ImageInterface::THUMBNAIL_INSET;
        $imagine->open($file_path)
            ->thumbnail(new Box(250,250),$mode)
            ->save($file_path);
        $product->file =$file_path;

        $product->category_id = $category_id;
        $product->caption = $request->input('caption');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        //$product->available = $request->input('available');
        $product->save();

        return redirect('admin/product')->with('message','You just uploaded an product!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product/product-detail')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('product/edit-product')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'price' => 'required',
            'userfile'    => 'sometimes|product|mimes:jpeg,png|min:1|max:250'
        ]);
        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }
        // Process valid data & go to success page //
        $product = Product::find($id);
        $category_id = DB::table('categories')->where('name', $request->input('category'))->value('id');
        if( $request->hasFile('userfile') ){
            $file = $request->file('userfile');
            $destination_path = 'uploads/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $file_path= $destination_path . $filename;
            $imagine = new Imagine();
            $mode = ImageInterface::THUMBNAIL_INSET;
            $imagine->open($file_path)
                ->thumbnail(new Box(250,250),$mode)
                ->save($file_path);
            $product->file =$file_path;
        }
            $product->category_id = $category_id;
            $product->caption = $request->input('caption');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->save();

        return redirect('admin/product')->with('message','You just updated a product!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        unlink(public_path($product->file));
        $product->delete();
        return redirect('admin/product')->with('message','You just deleted a product !');
    }

}
