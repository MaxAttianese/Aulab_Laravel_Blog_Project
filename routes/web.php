<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\ArticleController;

use App\Http\Controllers\Contactcontroller;

use App\Http\Controllers\AnimeController;

use App\Http\Controllers\HeroesController;

use App\Http\Controllers\AccountController;

use App\Http\Controllers\AdminController;



Route::get("/", [PageController::class, "homepage"])->name("homepage");

Route::get("/aboutMe", [PageController::class, "aboutMe"])->name("aboutMe");



Route::get("/contacts", [Contactcontroller::class, "contacts"])->name("contacts");

Route::post("/contacts/data", [Contactcontroller::class, "saveData"])->name("contacts.data");


Route::get("/anime", [AnimeController::class, "index"])->name("anime");


Route::get("/articles", [ArticleController::class, "index"])->name("articles.index");


Route::middleware('auth')->group(function() {

    Route::resource("articles", ArticleController::class)->except("index");

    Route::get("/animes/{id}", [AnimeController::class, "animeByGenre"])->name("animes.category");

    Route::get("/anime/saveData", [AnimeController::class, "saveData"]);



    Route::get("/heroes", [HeroesController::class, "viewHeroes"])->name("heroes");



    Route::get("/account", [AccountController::class, "accountView"])->name("account");
    Route::get("/account/articles", [AccountController::class, "accountArticles"])->name("account.articles");



    Route::resource("categories", App\Http\Controllers\CategoryController::class);


    

});

Route::get("/admin/editor", [AdminController::class, "index"])->name("admin.index")->middleware(["auth", "admin"]);









    /*Route::get("/seeder", function () {

        Article::create(["title"=>"Playstation 5", "category"=>"Elettronica", "description"=>"L'ultima console di Sony sul mercato.", "body" =>"..."]);

        Article::create(["title"=>"Xbox Series X", "category"=>"Elettronica", "description"=>"L'ultima console di Microsoft sul mercato.", "body" =>"..."]);
   
        Article::create(["title"=>"Nintendo Switch", "category"=>"Elettronica", "description"=>"L'ultima console di Nintendo sul mercato.", "body" =>"..."]);
   
        Article::create(["title"=>"Poster Loghi Console", "category"=>"Merchandising", "description"=>"Poster con i loghi di Sony, Microsoft, Nintendo ed altri che hanno vatto la storia dei videogiochi.", "body" =>"..."]);

    });*/