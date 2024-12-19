<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'bg_image', 'research_description'];

    // Define the relationship with the department_ID model
    public function department_id()
    {
        return $this->belongsTo(Department_id::class);
    }
}
