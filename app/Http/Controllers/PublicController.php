<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    protected $_companyModel;

    public function __construct() {
        $this->_companyModel = new Company;
    }

    public function showHome() {
        return view('home');        
    }

    public function showAziende() {
        $aznd = Company::whereIn('Id', $id)
        return view('aziende')
                    ->with('aziende', $aznd);      
    }



}
