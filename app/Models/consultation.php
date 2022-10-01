<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultation extends Model
{
    use HasFactory;
    protected $table='consultations';
    protected $fillable=[
        'patient_id',
        'consulted_by',   //doctor_id
        'problem_details',
        'problem_duration',
        'pre_prescribe',
        'is_examed',
        'is_on_exam',
        'exam',
        'test_image',
        'test_comment',
        'test_details',
        'exam_result',
        'final_prescribe',
        'patient_feedback',
        'is_complete'
    ];
    public function patient()  //making relationship
                {
                     return $this->belongsTo(Patient::class,'id','patient_id');
                }
    public function doctor()  //making relationship
                {
                     return $this->belongsTo(Doctor::class,'id','consulted_by');
                }
}
