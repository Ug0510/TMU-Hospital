<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edutip extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'title', ];

    // Define the relationship with the Department model
    public function department_id()
    {
        return $this->belongsTo(Department_id::class);
    }
}
