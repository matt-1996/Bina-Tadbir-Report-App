<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'comapnyName',
        'agentId',
        'message',
        'call',
        'contribution',
        'receivedEvidencesDate',
        'sendReportClientDate',
        'sendReportTaxDate',
        'month',
        'sendContractDate',
        'year',
        'knowledgeBase',
        'revenueTax',
        'salaryTax',
        'taklifiTax',
        'rentTax',
        'valueAddedTax',
        'moreTax'
    ];

    protected $casts = [
        'call' => 'array',
        'message' => 'array'
    ];
}
