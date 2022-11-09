<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'reaction_time',
        'dose',
        'pain',
        'nausea',
        'diarrhea',
        'fever',
        'sore_throat',
        'chills',
        'headache',
        'rash',
        'other',
        'therapy',
        'place',
        'current_status',
        'certificate_id'
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }
}
