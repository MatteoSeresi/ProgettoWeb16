<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller {

    protected $_utenteModel;

    public function __construct() {
        $this->_utenteModel = new User;
        $this->middleware('can:isUser');
    }

    public function userarea() {
        return view('user');
    }

    public function modificaUtente() {
        return view('user.usermodify');
    }

}
