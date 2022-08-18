<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'appointment_for',
        'appointment_with',
        'appointment_date',
        'appointment_time',
        'booked_by',
        'status',
        'is_deleted',
    ];

    function patient()
    {
        //return $this->hasOne(User::class, 'id', 'appointment_for');
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    function patientinfo()
    {
        return $this->hasOne(Patient::class, 'id','patient_id');
    }
    function BookedBy()
    {
        return $this->hasOne(User::class, 'id', 'booked_by');
    }

    function doctor()
    {
        return $this->hasOne(User::class, 'id', 'appointment_with');
    }
    
    function appointdoctor()
    {
        return $this->hasOne(User::class, 'id', 'appointment_with');
    }

    function receptionlist_doctor()
    {
        return $this->hasMany(ReceptionListDoctor::class, 'doctor_id', 'appointment_with');
    }

    function timeSlot()
    {
        return $this->hasOne(DoctorAvailableSlot::class, 'id', 'available_slot');
    }
    function invoice(){
        return $this->hasOne(Invoice::class)->where('payment_status','Paid');
    }
    function prescription(){
        return $this->hasOne(Prescription::class)->where('is_deleted',0);
    }
    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'appointment_exams','appointments_id','exam_id');
    }
}
