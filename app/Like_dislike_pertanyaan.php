<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like_dislike_pertanyaan extends Model
{
    protected $table = 'like_dislike_pertanyaan';

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan');
    }
}
