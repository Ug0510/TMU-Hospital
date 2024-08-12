<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'bg_image', 'research_description'];

    // Define the relationship with the Service model
    public function services()
    {
        return $this->hasMany(Service::class, 'department_id');
    }

    // Define the relationship with the HOD model
    public function hod()
    {
        return $this->hasOne(HOD::class);
    }
}
