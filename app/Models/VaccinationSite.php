<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationSite extends Model
{
    use HasFactory;
    protected $fillable = ['location', 'ward_id'];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
