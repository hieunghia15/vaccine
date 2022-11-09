<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinatedPersonInformation extends Model
{
    use HasFactory;
    protected $table = 'vaccinated_person_informations';
    protected $fillable = [
        'health_insurance_number',
        'date_injection',
        'job',
        'preferred_date',
        'session',
        'address',
        'guardian',
        'guardian_phone_number',
        'ward_id',
        'priority_group_id',
        'relation_id',
        'certificate_id'
    ];

    public function priorityGroup()
    {
        return $this->belongsTo(PriorityGroup::class, 'priority_group_id');
    }
    public function relation()
    {
        return $this->belongsTo(Relation::class, 'relation_id');
    }
    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id');
    }
    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    public function vaccineRegistrations()
    {
        return $this->hasMany(VaccineRegistration::class);
    }
}
