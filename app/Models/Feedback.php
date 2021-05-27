<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Feedback extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'feedback_icon',
        'feedback_type',
        'user_id',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
