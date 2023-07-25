<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Categorie";

        $categories = Category::all();

        return view("Homepage.Categories.index", compact("title","categories"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Crea Categoria";

        $titlePage = "Crea categoria";

        $action = route("categories.store");

        $placeholder = "Crea categoria";

        $buttoName = "Crea";

        $category = new Category;

        $method = "";

        return view("Homepage.Categories.form", compact("title", "titlePage", "action", "placeholder", "buttoName", "category", "method"));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {

        Category::create($request->all());

        return redirect()->route("categories.index")->with(["success" => "Categoria creata con successo"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        $title = "Modifica Categoria";

        $titlePage = "Modifica categoria";

        $action = route("categories.update", $category);

        $placeholder = "Modifica categoria";

        $buttoName = "Modifica";

        $method = "PUT";

        return view("Homepage.Categories.form", compact("title", "titlePage", "action", "placeholder", "buttoName", "category", "method"));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;

        $category->save();

        return redirect()->back()->with(["success" => "Categoria modificata con successo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {   
        $category->articles()->detach();

        $category->delete();

        return redirect()->back()->with(["success" => "Categoria cancellata con successo"]);
    }
}
