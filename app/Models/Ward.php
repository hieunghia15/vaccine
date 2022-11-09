<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'district_id'];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function healthDeclarations()
    {
        return $this->hasMany(HealthDeclaration::class);
    }
    public function sites()
    {
        return $this->hasMany(VaccinationSite::class);
    }
    public function vaccinatedPersonInfo()
    {
        return $this->hasMany(VaccinatedPersonInformation::class);
    }
}
