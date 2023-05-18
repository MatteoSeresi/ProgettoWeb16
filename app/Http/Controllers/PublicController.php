<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    protected $_catalogModel;

    public function showHome() {
        return view('home');        
    }



}
