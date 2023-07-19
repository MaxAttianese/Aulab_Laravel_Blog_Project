<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroesController extends Controller
{

    public function viewHeroes() {
    
        $title = "Heroes";

        return view("Homepage.Heroes.heroes", compact("title"));

    }
}
