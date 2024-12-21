<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edutip extends Model
{
    use HasFactory;

    // Define the table name if different from the default plural model name
    protected $table = 'edutips'; 

    // Fillable columns for mass assignment
    protected $fillable = [
        'department_id',
        'title',
        'description',
        'priority',
        'status'
    ];

    // Define the relationship with the Department model
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    // Optional: Add mutator or accessor for 'status' if needed
    // public function setStatusAttribute($value)
    // {
    //     $this->attributes['status'] = strtoupper($value);
    // }

    // Optional: Add any custom logic for priority or status if required
}
