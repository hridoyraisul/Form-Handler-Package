<?php

namespace RaisulHridoy\FormHandler\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'class'=>'array'
    ];
}
