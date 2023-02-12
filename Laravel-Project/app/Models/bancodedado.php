<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bancodedado extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'cidade',
        'observation'
    ];
}
