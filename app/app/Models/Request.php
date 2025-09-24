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

    public function comments()
    {
        return $this->hasMany(RequestComment::class, 'request_id');
    }
}
