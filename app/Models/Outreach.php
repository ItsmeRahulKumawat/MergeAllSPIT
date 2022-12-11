<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outreach extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    
    protected $fillable = [
        'id',
        'outreach_faculty_department',
        'outreach_faculty_name',
        'outreach_activity',
        'outreach_status',
        'outreach_activity_venue',
        'outreach_activity_date',
        'outreach_sponsors',
        'outreach_amount',
        'outreach_photos',
        'outreach_report'
    ];
}
