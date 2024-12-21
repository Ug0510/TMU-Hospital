<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HOD extends Model
{
    use HasFactory;

    protected $table = 'hods';

    protected $fillable = [
        'department_id',
        'name',
        'designation',
        'qualifications',
        'profile_path',
    ];

    // Define the relationship with the Department model
    public function department()
    {
        return $this->hasOne(Department::class, 'hod_id'); // This links back to departments
    }
}
