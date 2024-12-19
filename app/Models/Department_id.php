<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department_id extends Model
{
    use HasFactory;

    protected $table = 'department_id';

    protected $fillable = ['department_name', 'department_type'];

    // Define the relationship with the Service model
    public function services()
    {
        return $this->hasMany(Service::class, 'department_id');
    }

    // Define the relationship with the HOD model
    public function hod()
    {
        return $this->hasOne(HOD::class, 'department_id');
    }

    // Define the relationship with the HOD model
    public function department()
    {
        return $this->hasOne(Department::class, 'department_id');
    }

    // Define the relationship with the EduTip model
    public function edutips()
    {
        return $this->hasMany(EduTip::class, 'department_id');
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department_id');
    }
}
