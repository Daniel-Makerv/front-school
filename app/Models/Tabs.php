<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabs extends Model
{
    use HasFactory;
    protected $table = "tabs";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_rol',
        'nombre',
        'svg_icono',
        'route'
    ];
}
