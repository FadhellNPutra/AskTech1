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
}
