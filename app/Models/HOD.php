<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;





class HOD extends Model
{
    use HasFactory;

    protected $table = 'hods';

    protected $fillable = [
        'doctor_id',
        'department_id',
        'image_url',
        'quote',
        'title',
        'status',
        'priority',
    ];
    // Define the relationship with the Department model
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id'); // This links back to departments
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'doctor_id');
    }
}
