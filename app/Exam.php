<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
	 use SoftDeletes; 
    use HasFactory;
    protected $fillable = [
        'abbreviation',
        'name',
        'category',
        'team',
        'destiny',
        'label_group',
        'quantity_label',
        'exam_kit',
        'exam_support',
        'exam_price',
        'exam_editor',
    ];
    public $timestamps = false;
    
    public function appointmentresults($id)
    {
        return $this->hasMany(Result::class,'exams_id')->where(['results.appointment_id' => $id]);
    }
}
