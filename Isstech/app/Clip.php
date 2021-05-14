<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    //
    public $timestamps = false;

    public function solicitudClip()
    {
        return $this->belongsTo('App\Queja__sugerencia__felicitacion','id_clips_fk');
    }
}
