<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table='productos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',
        'descripcion',
    ];
    use HasFactory;
}
