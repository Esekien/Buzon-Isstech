<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja__sugerencia__felicitacion extends Model
{
    //
    protected $table = 'queja__sugerencia__felicitacions';
    protected $primaryKey = 'id_Queja_Sugerencia_Felicitacion';
    public $timestamps = false;

    
    public function direccionSend()
    {
        return $this->hasMany('App\Direccion','id_direccion' , 'id_direccion_fk');
    }
    public function nodhSend()
    {
        return $this->hasMany('App\No_derechohabientes','id' , 'id_nodhabientes_fk');
    }

    public function dhSend()
    {
        return $this->hasMany('App\Clip','id' , 'id_clips_fk');
    }
    
}
