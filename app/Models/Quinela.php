<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Cliente;

class Quinela extends Model
{
    use HasFactory;
  public function cliente()
  {
    return $this->belongsTo(Cliente::class, 'user_id', 'id');
  }
}