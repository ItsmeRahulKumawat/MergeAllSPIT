<?php

namespace App\Models\proposal_outreach;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'faculty_group_name',
        'faculty_group_department',
    ];
}
