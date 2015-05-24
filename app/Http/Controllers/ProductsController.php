<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

class ProductsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $products = Product::latest()->with('category', 'user')->paginate(15);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $product = new Product();
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProductRequest $request) {
        $product = Product::create($request->all());
        $product->image = $product->processImage();
        $product->save();
        return redirect('products')->with('message', 'Products created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ProductRequest $request) {

        $input = array_except($request->all(), 'password');

        $product = Product::findOrFail($id);
        $product->fill($input);
        $product->image = $product->processImage();
        $product->push();

        return redirect('products')->with('message', 'Product created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'Products deleted', 'id' => $id]);
    }

}
