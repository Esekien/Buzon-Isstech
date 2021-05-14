<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class No_derechohabientes extends Model
{
    //
    protected $table = 'no_derechohabientes';
    public $timestamps = false;

    public function solicitudNodh()
    {
        return $this->belongsTo('App\Queja__sugerencia__felicitacion','id_nodhabientes_fk');
    }
}
