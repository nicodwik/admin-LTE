<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
// MODEL INI SUDAH DIBUAT SEJAK HARI JUMAT. 
// BERHUBUNG TUGAS HARI INI TENTANG ELOQUENT, 
// JADI FILE INI TIDAK ADA PERUBAHAN DAN SAYA ANGGAP SUDAH MENYELESAIKAN TUGAS
{
    protected $table = 'pertanyaan';
    protected $fillable = [
        'judul', 'isi', 'profil_id'
    ];

    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    /////////////////////////////////////////////////

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban');
    }

    public function like_dislike_pertanyaan()
    {
        return $this->hasMany('App\Like_dislike_pertanyaan');
    }

    public function komentar_pertanyaan()
    {
        return $this->hasMany('App\Komentar_pertanyaan');
    }
    
}
