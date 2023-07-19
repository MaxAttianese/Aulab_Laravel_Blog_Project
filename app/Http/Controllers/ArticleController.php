<?php

namespace App\Http\Controllers;

use App\Models\Article;

use App\Models\Category;

use Illuminate\Http\Request;

use App\Http\Requests\StoreArticleRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = "Articoli";

        $articles = Article::paginate(4);

        return view("Homepage.Articles.index", compact("title", "articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Crea Articolo";

        $article = "";

        $categories = Category::orderBy("name", "ASC")->get();

        return view("Homepage.Articles.create", compact("title","article", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {   

        //dd($request);
        $article = new Article();
        $article->title = $request->title;
        $article->category = $request->category;
        $article->description = $request->description;
        $article->body = $request->body;
        $article->save();


        if($request->hasFile('image') && $request->file('image')->isValid()){

            $extension = $request->file('image')->extension();

            $randomName = uniqid("articles_img_") . "$extension";

            $pathImg = $request->file('image')->storeAs("public/image/" . $article->id, $randomName);

            $article->image = $pathImg;

            $article->save();
        }

        return redirect()->route("articles.index")->with(["success" => "Articolo creato con successo"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $title = "Articolo";

        $article = Article::find($article->id);

        return view("Homepage.Articles.show", compact("title", "article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $title = "Modifica Articolo";

        $categories = Category::orderBy("name", "ASC")->get();

        return view("Homepage.Articles.edit", compact("title", "categories", "article"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {

        $article->title = $request->title;
        $article->category = $request->category;
        $article->description = $request->description;
        $article->body = $request->body;
        $article->save();


        if($request->hasFile('image') && $request->file('image')->isValid()){

            $extension = $request->file('image')->extension();

            $randomName = uniqid("articles_img_") . "$extension";

            $pathImg = $request->file('image')->storeAs("public/image/" . $article->id, $randomName);

            $article->image = $pathImg;

            $article->save();
        }

        return redirect()->back()->with(["success" => "Articolo modificato con successo"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with(["success" => "Articolo cancellato con successo"]);
    }
}
