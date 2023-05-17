<?php

namespace App\Models\Resources;

//use App\Models\Resources\Company;

class Company
{
    protected $table = 'companies';

    protected $primaryKey = 'id';

    public function getAzienda()
    {
        return Company::where('Ragione_Sociale', 'Coal')->get();
    }
}
