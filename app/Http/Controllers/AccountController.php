<?php

namespace App\Http\Controllers;

use App\Models\Article;

use App\Models\User;

use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function accountView() {

        $title = auth()->user()->name . " Account";

        return view("Account.account", compact("title"));
    }

    public function accountArticles() {

        $title = "Articoli di " . auth()->user()->name;

        //$articles = Article::where("user_id", auth()->user()->id)->get();

        $articles = auth()->user()->articles;

        //dd($articles);

        return view("Homepage.Articles.accountarticles", compact("title", "articles"));
    }
}
