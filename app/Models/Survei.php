<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model {
    use HasFactory;

    protected $fillable = [
        'pertanyaan_id',
        'responden_id',
        'jawaban',
    ];
}
