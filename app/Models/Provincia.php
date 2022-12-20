<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';
    protected $primaryKey = 'id';
    protected $timestamps = true;

    protected $fillable = [
        'nombre',
        'region_id',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }
}
