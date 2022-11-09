<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'vaccination',
        'vaccinated_person_information_id',
        'medical_history_id',
        'vaccination_consent_form_id',
        'user_id',
    ];

    public function info()
    {
        return $this->belongsTo(VaccinatedPersonInformation::class, 'vaccinated_person_information_id');
    }
    public function consentForm()
    {
        return $this->belongsTo(VaccinationConsentForm::class, 'vaccination_consent_form_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class, 'medical_history_id');
    }
}
