<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'descricao'
    ];

    public function produto()
    {
        return $this->hasMany(Categoria::class);
    }
}
