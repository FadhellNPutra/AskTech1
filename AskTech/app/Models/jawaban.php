<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    use HasFactory;
    // milih table
    protected $table = 'jawaban';

    // manipulasi kolom
    protected $fillable = ['user_id','pertanyaan_id','isi_jawaban','foto'];

    public function jawaban(){
        return $this->hasMany(jawaban::class,'pertanyaan_id');
    }
}
