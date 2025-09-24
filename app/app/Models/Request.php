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
    public const PRIORITIES = [
        'low' => 'Низкий',
        'medium' => 'Средний',
        'high' => 'Высокий',
    ];
    public const STATUSES = [
        'new' => 'Новая',
        'in_progress' => 'В работе',
        'done' => 'Завершена',
    ];

    public function comments()
    {
        return $this->hasMany(RequestComment::class, 'request_id');
    }
}
