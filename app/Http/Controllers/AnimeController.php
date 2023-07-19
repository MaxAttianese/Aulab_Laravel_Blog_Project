<?php

namespace App\Http\Controllers;
use App\Models\Anime;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{

    public function index() {

        $title = "Anime";

        $endpoint = "https://api.jikan.moe/v4/genres/anime";

        $animeElements = Http::get($endpoint)->json();

        //dd($animeElements["data"]);

        $anime = $animeElements["data"];

        return view("Homepage.Anime.anime", compact("title", "anime"));
    }

    public function animeByGenre($id) {

        $title = "Anime";

        $endpoint = "https://api.jikan.moe/v4/anime?genres=$id" ;

        $animeElements = Http::get($endpoint)->json();

        //dd($animeElements["data"]);

        $anime = $animeElements["data"];

        return view("Homepage.Anime.animecategory", compact("title", "anime"));

    }

    public function saveData() {

        $endpoint = "https://api.jikan.moe/v4/genres/anime";

        $animeElements = Http::get($endpoint)->json();

        //dd($animeElements["data"]);

        $anime = $animeElements["data"];

        foreach($anime as $item) {

            Anime::create(["mal_id"=>$item["mal_id"], "name"=>$item["name"]]);

        }
    }

}
