<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $fillable = [
        'play',
        'status',
        'whites',
        'blacks',
        'winner',
        'loser',
        'tie',
        'schedule'
    ];

}
