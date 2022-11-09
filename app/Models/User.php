<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'phone',
        'fullname',
        'password',
        'day_of_birth',
        'gender',
        'address',
        'email',
        'identification',
        'ward_id',
        'nationality_id',
        'ethnic_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }
    public function ethnic()
    {
        return $this->belongsTo(Ethnic::class, 'ethnic_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function healthDeclarations()
    {
        return $this->hasMany(HealthDeclaration::class);
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
    public function vaccineRegistrations()
    {
        return $this->hasMany(VaccineRegistration::class);
    }
}
