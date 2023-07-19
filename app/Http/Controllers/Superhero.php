<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Class_custom\hero_generate;

class Superhero extends Controller
{
    public function heroInsert() {

        $heroes = [
            
            new Hero_generate("Spiderman", 20, "Marvel"),

            new Hero_generate("Wolverine", 33, "Marvel"),

            new Hero_generate("Ironman", 40, "Marvel"),

            new Hero_generate("Deadpool", 28, "Marvel"),

            new Hero_generate("Batman", 30, "Dc"),

            new Hero_generate("Superman", 35, "Dc"),
            
            new Hero_generate("Wonderwoman", 31, "Dc"),

            new Hero_generate("Flash", 27, "Dc"),

        ];

        return $heroes;
    }
}
