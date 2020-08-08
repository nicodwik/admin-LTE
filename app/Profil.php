<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';

    public function pertanyaan()
    {
        return $this->hasMany('App\Pertanyaan');
    }
}
