<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*public $user;

    public function __construct() {

        $this->user = ["user" => "Max", "email" => "max@example.com"];

    }*/


    public function homepage() {

    //$user = $this->user;

    //$user = "";

    $title = "Homepage";

    $description = "Benvenuto al primo progetto Laravel di Max";

    return view("Homepage.homepage", compact("title", "description"));

    }

    public function aboutMe() {
        
    $title = "Chi Sono";

    $description = "Ciao sono Massimiliano Attianese e ho 28 anni.";

    return view("Homepage.AboutMe.about-me",compact("title", "description"));

    }

}
