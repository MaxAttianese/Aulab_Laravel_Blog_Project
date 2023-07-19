<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
   public $linkNav;

    public function __construct()
    {
        $this->linkNav = [ route('articles.index')=>"Articoli", route('categories.index')=>"Categorie", route("anime")=>"Anime", route('contacts')=>"Contatti", route('aboutMe')=>"Chi sono"];
    }

    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
