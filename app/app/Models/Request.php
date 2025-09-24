<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority'
    ];
}
