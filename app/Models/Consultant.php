<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'position', 'industry', 'expertise', 'hourlyRate', 'availability', 'image', 'client_id'
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
