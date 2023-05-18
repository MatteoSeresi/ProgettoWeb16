<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function userarea() {
        return view('user');
    }

    public function modificaUtente() {
        return view('user.usermodify');
    }

}
