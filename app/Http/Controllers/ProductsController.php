<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;

use Illuminate\Support\Facades\Storage;


use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products/index', compact('products'));
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(ProductRequest $request, ProductRepository $repository)
    {
        $image = $request->file('image');
        $imageName = time() . '-' . request()->image->getClientOriginalName();
        request()->image->move(public_path('images'), $imageName);
        
        $image = $request->file('thumbnail');
        $imageThumbnail = time() . '-' . request()->image->getClientOriginalName();
        request()->thumbnail->move(public_path('thumbnails'), $imageThumbnail);       
        

        $data = $request->all();
        $data['image'] = $imageName;
        $data['thumbnail'] = $imageThumbnail;        
        $product = $repository->createProduct($data);
        $product->save();
        
        return redirect()->route('products');
    }

    public function edit(ProductRepository $repository, $id)
    {
        $products = $repository->find($id);

        return view('products/edit', compact('products'));
    }

    public function update(ProductRequest $request, ProductRepository $repository, $id)
    {
        $product = $repository->find($id);
        $thumbnail = $request->file('thumbnail');
        if($product->image != null){
            unlink('thumbnails/'.$product->thumbnails);
        }
        $profileName = time() . '-' . request()->thumbnail->getClientOriginalName();
        request()->thumbnail->move(public_path('thumbnails'), $profileName);

        $data = $request->all();
        $product = $repository->find($id);
        $product->updateProduct($data);  
        
        $product->save();     

        return redirect()->route('products');
    }

    public function show(ProductRepository $repository, $id)
    {
        $product = $repository->find($id);
        $product->profile = asset('thumbnail/'. $product->profile);

        $product = $repository->find($id);
        $product = $repository->find($id);
        $products = $repository->find($id);

        return view('products/show', compact('products'));
    }

    public function destroy(ProductRepository $repository, $id)
    {
        $repository->delete($id);
        
        return redirect()->route('products');
    }    
}
