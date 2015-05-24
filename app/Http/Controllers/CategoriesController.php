<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller {

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
        $category = Category::latest()->paginate(15);
        return view('categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $category = new Category;
        return view('categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CategoryRequest $request) {
        $input = $request->all();
        Category::create($input);
        return redirect('categories')->with('message', 'Category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CategoryRequest $request) {
        $input = $request->all();

        $category = Category::find($id);
        $category->fill($input);
        $category->push();

        return redirect('categories')->with('message', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Category::destroy($id);
        return response()->json(['message' => 'Category deleted', 'id' => $id]);
    }

}
