<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportBug extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'bug_desc',
        'user_id',
        'report_id'
    ];
}
