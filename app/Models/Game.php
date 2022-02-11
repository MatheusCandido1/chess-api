<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'play',
        'status',
        'whites',
        'blacks',
        'winner',
        'loser',
        'winner_color',
        'loser_color',
        'tie',
        'schedule',
        'pgn',
        'speed'
    ];

    protected $casts = [
        'schedule' => 'datetime:d/m/Y H:i',
    ];

    public function whites() {
        return $this->belongsTo('App\Models\Player', 'whites');
    }

    public function blacks() {
        return $this->belongsTo('App\Models\Player', 'blacks');
    }

    public function winner() {
        return $this->belongsTo('App\Models\Player', 'winner');
    }

    public function loser() {
        return $this->belongsTo('App\Models\Player', 'loser');
    }
}
