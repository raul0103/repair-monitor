<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestComment extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'request_id',
        'text',
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}
