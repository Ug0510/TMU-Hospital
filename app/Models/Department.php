<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Set the primary key if it's not the default 'id'
    protected $primaryKey = 'department_id';

    // Set the key type to 'int' since department_id is an integer
    protected $keyType = 'int';

    // Set $incrementing to true to make 'department_id' auto-incrementing
    public $incrementing = true;

    // Fillable columns for mass assignment
    protected $fillable = [
        'department_name', 
        'bg_image', 
        'description', 
        'research_description', 
        'phone', 
        'status', 
        'hod', 
        'hod_id', 
        'department_type', 
        'priority', 
        'slug'
    ];

    // Timestamps are enabled by default
    public $timestamps = true;

    // Define the relationship with the Service model
    public function services()
    {
        return $this->hasMany(Service::class, 'department_id');
    }

    // Define the relationship with the HOD model
    public function hod()
    {
        return $this->belongsTo(HOD::class, 'hod_id'); // Linking hod_id with hods table
    }

    // Define the relationship with the EduTip model
    public function edutips()
    {
        return $this->hasMany(EduTip::class, 'department_id');
    }

    // Define the relationship with the Doctor model
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department_id');
    }
}
