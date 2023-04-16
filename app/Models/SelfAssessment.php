<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfAssessment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function selfassessment()
    {
        return $this->belongsTo(SelfAssessment::class);
    }
}
