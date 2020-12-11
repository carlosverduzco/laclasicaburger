<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "precio",
        "descripcion",
        "categoria_id"
    ];

    protected static function boot() {
        parent::boot();
        self::creating(function ($table) {
            if ( ! app()->runningInConsole()) {
                $table->id_usuario = auth()->id();
            }
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
     public function getDescripcionAttribute($value){
        return ucfirst(strtolower($value));
     }
    public function setNombreAttribute($value){
        $value = strtolower($value);
        $this->attributes['nombre'] = ucwords($value);
    }
    public function categorias(){
        return $this->belongsToMany(Agregado::class);
    }
}
