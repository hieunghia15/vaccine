<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'applicable_age',
        'effection',
        'injection_dose',
        'injection_time',
        'manufacture_id',
        'vaccine_type_id'
    ];

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id');
    }
    public function vaccineType()
    {
        return $this->belongsTo(VaccineType::class, 'vaccine_type_id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
