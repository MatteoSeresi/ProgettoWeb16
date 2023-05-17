<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $primaryKey = 'id';

    public function getAzienda()
    {
        return Company::select('Ragione_Sociale')->get();
    }
}
