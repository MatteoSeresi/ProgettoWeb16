<?php

namespace App\Http\Controllers;

use App\Models\Resources\Company;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    protected $_companyModel;
    protected $_offerModel;

    public function __construct() {
        $this->_companyModel = new Company;
        $this->_offerModel = new Company;
    }

    public function showHome() {
        return view('home');        
    }

    public function showAziende() {
        $aznd = $this->_companyModel->getAzienda();   
        return view('aziende')
                    ->with('aziende', $aznd);
    }

    public function showOffer() {
        $cat = $this->_offerModel->getOfferta();    
        return view('aziende')
                    ->with('aziende', $off);
    }

}
