<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dado extends Model
{
    use HasFactory;

    protected $fillable = ['id','nome','sobrenome','email','contato','endereço'];
}
