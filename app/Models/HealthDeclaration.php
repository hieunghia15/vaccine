<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthDeclaration extends Model
{
    use HasFactory;
    protected $fillable = [
        'current_address',
        'traveled',
        'signs',
        'suspected_covid',
        'people_countries_covid',
        'manifestation',
        'user_id',
        'ward_id'
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
