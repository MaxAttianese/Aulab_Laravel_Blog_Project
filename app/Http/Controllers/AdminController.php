<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $title = "Pannello Admin";

        return view("Admin.index", compact("title"));

    }
}