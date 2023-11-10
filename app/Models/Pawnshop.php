<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pawnshop extends Model
{
    use HasFactory;


    protected $fillable = [
        'arrahnu_type',
        'arrahnu_name',
        'margin',
        'loan_duration',
        'agent_name',
        'agent_contact_num',
        'email',
        'hotline',
        'address',
        'coordinate',
        'operation_time',
        'user_id',
        'safekeep_rate_id',

    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    
    public function safekeeprate() 
    {
        return $this->belongsTo(SafeKeepRate::class, 'safekeep_rate_id');
    }
}
