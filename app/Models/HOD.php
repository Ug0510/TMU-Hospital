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
        'title',
        'qualifications',
        'image',
        'quote',
    ];

    public function department_id()
    {
        return $this->belongsTo(Department_id::class);
    }
}
