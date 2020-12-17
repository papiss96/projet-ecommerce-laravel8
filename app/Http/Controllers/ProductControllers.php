<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControllers extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Product::all(),200);
    }
    
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'quantite' => $request->quantite,
            'disponible' => $request->disponible,
            'vendeur_id' => $request->vendeur_id,
            'image_url' => $request->image_url
        ]);
        
        return response()->json([
            'status' => (bool) $product,
            'data'   => $product,
            'message' => $product ? 'Product Created!' : 'Error Creating Product'
        ]);
    }
    
    public function show(Product $product)
    {
        return response()->json($product,200); 
    }

    public function uploadFile(Request $request)
    {
        if($request->hasFile('image_url')){
            $name = time()."_".$request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move(public_path('images_url'), $name);
        }
        return response()->json(asset("images_url/$name"),201);
    }

    public function update(Request $request, Product $product)
    {
        $status = $product->update(
            $request->only(['name', 'description', 'category', 'price', 'quantite', 'disponible', 'vendeur_id', 'image_url'])
        );
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Updated!' : 'Error Updating Product'
        ]);
    }
    
    // public function updateQuantite(Request $request, Product $product)
    // {
    //     $product->quantite = $product->quzntite + $request->get('quzntite');
    //     $status = $product->save();
        
    //     return response()->json([
    //         'status' => $status,
    //         'message' => $status ? 'Units Added!' : 'Error Adding Product quantite'
    //     ]);
    // }

    public function destroy(Product $product)
    {
        $status = $product->delete();
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
        ]);
    }
}
