<?php

namespace App\Models\proposal_outreach;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{

    use HasFactory;

    protected $fillable = [
        'faculty_name[]',
        'faculty_department[]',
        'faculty_email[]',
        'faculty_phone[]',
        'faculty_password[]'
    ];
}
