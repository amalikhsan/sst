<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterView extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function interview()
    {
        return $this->belongsTo(InterView::class);
    }
}
