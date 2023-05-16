<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Activity;
use App\Models\InterView;
use App\Models\SelfAssessment;
use App\Models\StudentProfile;
use App\Models\SelfAssessmentTwo;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'username',
        'password',
        'avatar',
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

    public function selfassessment()
    {
        return $this->hasOne(SelfAssessment::class);
    }

    public function selfassessmenttwo()
    {
        return $this->hasOne(SelfAssessmentTwo::class);
    }

    public function interview()
    {
        return $this->hasOne(InterView::class);
    }

    public function studentprofile()
    {
        return $this->hasOne(StudentProfile::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

}
