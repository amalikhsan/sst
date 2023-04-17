<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function studentprofile()
    {
        return $this->belongsTo(User::class);
    }
}
