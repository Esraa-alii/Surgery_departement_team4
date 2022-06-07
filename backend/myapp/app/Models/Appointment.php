<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];
    protected $casts = [
        'op_date' => 'datetime'
    ];

    use HasFactory;

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_ssn', 'ssn')->whereRole('Doctor');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_ssn', 'ssn')->whereRole('Patient');
    }

    public function room()
    {
        return $this->belongsTo(OperationRoom::class, 'operation_room_id', 'id');
    }
}
