<?php

namespace App\Models\proposal_outreach;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'department_id';
    protected $fillable = [
        'department_id',
        'department_name',
    ];
}
