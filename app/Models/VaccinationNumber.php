<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationNumber extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
