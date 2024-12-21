<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    // Primary key is explicitly defined as doctor_id
    protected $primaryKey = 'doctor_id';

    // Indicates the primary key is an auto-incrementing integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Fillable columns for mass assignment
    protected $fillable = [
        'department_id',
        'designation_id',
        'name',
        'qualifications',
        'profile_path',
        'status',
        'priority',
    ];

    // Define relationship to the Department model
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    // Define relationship to the DoctorDesignation model
    public function designation()
    {
        return $this->belongsTo(DoctorDesignation::class, 'designation_id', 'designation_id');
    }
}
