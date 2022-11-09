<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'anaphylaxis',
        'covid_19',
        'other_vaccination',
        'immunosuppression',
        'immunosuppressant',
        'acute_illness',
        'chronic',
        'chronic_illness',
        'pregnant',
        'over_age',
        'coagulation',
        'allergy',
    ];
    public function vaccineRegistrations()
    {
        return $this->hasMany(VaccineRegistration::class);
    }
}
