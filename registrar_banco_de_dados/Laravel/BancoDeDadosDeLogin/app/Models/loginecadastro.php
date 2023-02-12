<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginecadastro extends Model
{
    use HasFactory;

    protected $fillable = [ 'id','email', 'usuario','senha'
    ];
}
