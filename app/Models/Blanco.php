<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blanco extends Model
{
    protected $fillable = ['categoria', 'color', 'tamano','numEntradas','numSalidas', 'status'];
}
