<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'cidade';
    protected $fillable = [
        'id',
        'nome',
        'estadoId',
    ];

}
