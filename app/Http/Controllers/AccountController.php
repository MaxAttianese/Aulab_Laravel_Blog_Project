<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accountView() {

        $title = "account";

        return view("Account.account", compact("title"));
    }
}
