<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
     // milih table
     protected $table = 'profil';

     // manipulasi kolom
     protected $fillable = ['nama','bio','alamat','tanggal_lahir','user_id'];

     // One to One (turunan dari user id)
     public function user(){
        return $this->belongsTo(User::class, 'user_id');
     }
}
