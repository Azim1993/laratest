<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductValidation;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // view all product
    protected function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();;
        return view('product.products',compact('products'));
    }

    // product page create page view
    protected function create()
    {
        return view('product.productCreate');
    }

    // product store
    protected function store(ProductValidation $request)
    {
//        dd($request->all());
        $addProduct = new Product($request->all());
        $addProduct->userId = Auth::user()->id;
        $addProduct->remember_token = $request->input('_token');
        $addProduct->save();

        if($addProduct)
            return redirect('products');

        return back();
    }

    // product view
    protected function show($id)
    {
        $product = Product::findOrFail($id);

        if(!empty($product))
            return view('product.product',compact('product'));

        return view('product.products');
    }

    // product edit page view
    protected function edit($id)
    {
        $product = $this->productCheck($id);

        if(empty($product)){
            return redirect('product/' . $id);
        } else{
            return view('product.productEdit',compact('product'));
        }
    }

    // product update
    protected function update(ProductValidation $request,$id)
    {
        $product = $this->productCheck($id);
        if(empty($product)){
            return back();
        }
        $product->update($request->all());
        return redirect('product/'.$id);
    }

    // delete product
    protected function delete($id)
    {
        $product = $this->productCheck($id);

        $product->delete();

        return redirect('products');
    }

    //product check with product->id and user->id
    private function productCheck($id)
    {
        return Product::where([
                'id' => $id,
                'userId' => Auth::user()->id
            ])->first();
    }
}
