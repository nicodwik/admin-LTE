<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar_pertanyaan extends Model
{
    protected $table = 'komentar_pertanyaan';

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan');
    }
}
