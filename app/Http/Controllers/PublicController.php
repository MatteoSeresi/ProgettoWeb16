<?php

namespace App\Http\Controllers;

use App\Models\Resources\Company;
use App\Models\Resources\Offer;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    protected $_companyModel;
    protected $_offerModel;

    public function __construct() {
        $this->_companyModel = new Company;
        $this->_offerModel = new Offer;
    }

    public function showHome() {
        return view('home');        
    }

    public function showAziende() {
        $aznd = $this->_companyModel->getAzienda();   
        return view('aziende')
                    ->with('aziende', $aznd);
    }

    public function showOfferta() {
        $off = $this->_offerModel->getOfferta();    
        return view('catalogo')
                    ->with('catalogo', $off);
    }

}
