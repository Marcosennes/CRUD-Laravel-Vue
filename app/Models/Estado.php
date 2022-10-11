<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Traits\TransformableTrait;

class Estado extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'estado';
    protected $fillable = [
        'id',
        'nome',
        'abreviacao',
    ];
}
