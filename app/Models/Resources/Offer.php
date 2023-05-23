<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    protected $primaryKey = 'ID_Offerta';

    public function getOfferta()
    {
        return Offer::select()->get();
    }
}
