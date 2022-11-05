<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable =[
        'proposal-title',
        'proposal-authority/organization',
        'proposal-govt/private',
        'proposal-abstract',
        'proposal-funding-amount',
        'proposal-submission-date',
    ];
}
