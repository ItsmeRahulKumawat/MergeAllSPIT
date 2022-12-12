<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $primaryKey = 'proposal_title';
    protected $keyType = 'string';

    protected $fillable =[
        'proposal_title',
        'proposal_authorityOrOrganization',
        'proposal_govtPrivate',
        'proposal_abstract',
        'proposal_fundingAmount',
        'proposal_submissionDate',
        'proposal_file',
    ];
}
