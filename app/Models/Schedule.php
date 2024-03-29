<?php

namespace App\Models;

use App\Models\ConsultationRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'start_time',
        'end_time',
    ];

    public function consultationRequests()
    {
        return $this->hasMany(ConsultationRequest::class);
    }
}
