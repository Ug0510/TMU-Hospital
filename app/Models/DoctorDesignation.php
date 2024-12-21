<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDesignation extends Model
{
    use HasFactory;

    protected $table = 'doctors_designation';

    // Primary key for the table
    protected $primaryKey = 'designation_id';

    // Indicates the primary key is an auto-incrementing integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Fillable columns for mass assignment
    protected $fillable = [
        'priority',
        'designation',
        'status',
    ];
}
