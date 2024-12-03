<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'reimbursement', 'availability'
    ];
}
