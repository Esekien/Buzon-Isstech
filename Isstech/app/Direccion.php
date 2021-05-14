<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $table = 'direccions';
    protected $primaryKey = 'id_direccion';
    //protected $guarded = [];
    public $timestamps = false;

    public function solicitud()
    {
        return $this->belongsTo('App\Queja__sugerencia__felicitacion','id_direccion_fk');
    }

}
