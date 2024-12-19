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

    protected $fillable = [
        'department_id',
        'title',
        'description',
    ];

    /**
     * Define the relationship with the Department_id model.
     * Assuming department_id is related to the department_id table.
     */
    public function department()
    {
        return $this->belongsTo(Department_id::class, 'department_id');
    }
}


