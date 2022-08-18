<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Exam extends Model
{   use SoftDeletes;
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
}
