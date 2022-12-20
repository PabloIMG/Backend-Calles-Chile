<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';
    protected $primaryKey = 'id';
    protected $timestamps = true;

    protected $fillable = [
        'numero',
        'nombre',
    ];

    public function provincias()
    {
        return $this->hasMany(Provincia::class);
    }

}