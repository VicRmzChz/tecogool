<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quienla;


class Cliente extends Model
{
    use HasFactory;

    public function todasLasQuinelas()
    {
      return $this->hasMany(Quinela::class);
    }
}