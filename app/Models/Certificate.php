<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'vaccination_number_id', 'vaccination_time', 'lot_number',
        'vaccine_id', 'vaccination_site_id', 'user_id'
    ];

    public function vaccinationSite()
    {
        return $this->belongsTo(VaccinationSite::class, 'vaccination_site_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class, 'vaccine_id');
    }
    public function dose()
    {
        return $this->belongsTo(VaccinationNumber::class, 'vaccination_number_id');
    }
    public function reactionStatuses()
    {
        return $this->hasMany(ReactionStatus::class);
    }
    public function vaccinatedPersonInfors()
    {
        return $this->hasMany(VaccinatedPersonInformations::class);
    }
}
