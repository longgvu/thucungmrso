<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tittle',
        'link',
        'description',
    ];
}
