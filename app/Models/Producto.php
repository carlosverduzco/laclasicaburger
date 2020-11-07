<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ["nombre","precio","descripcion","tipo_de_producto"];

    protected static function boot() {
        parent::boot();
        self::creating(function ($table) {
            if ( ! app()->runningInConsole()) {
                $table->id_usuario = auth()->id();
            }
        });
    }

    public function usuario() {
        return $this->belongsTo(User::class);
    }
}
