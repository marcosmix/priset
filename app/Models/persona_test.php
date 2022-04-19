<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona_test extends Model
{
    protected $fillable=['nombre','apellido','dni','cuil'];
    use HasFactory;
}
