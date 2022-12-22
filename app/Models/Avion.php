<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    use HasFactory;
    protected $table = 'aviones';

    protected $fillable = [
        'modelo', 'capacidad', 'alcance', 'estado', 'fabricante_id'
    ];

    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class);
    }
}
