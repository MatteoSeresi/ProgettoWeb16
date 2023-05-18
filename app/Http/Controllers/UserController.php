<?php

namespace App\Http\Controllers;

class userController extends Controller {

    public function index() {
        return view('user');
    }

    public function modificaUtente() {
        return view('user.usermodify');
    }

}
