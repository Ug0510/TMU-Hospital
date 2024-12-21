<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    // Define the columns that are mass assignable
    protected $fillable = [
        'department_id',
        'title',
        'description',
        'priority',
        'status',
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
