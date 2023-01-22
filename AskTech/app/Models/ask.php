<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ask extends Model
{
    use HasFactory;
    
    // milih table
    protected $table = 'pertanyaan';

    // manipulasi kolom
    protected $fillable = ['isi_pertanyaan','kategori','foto'];

    

}
