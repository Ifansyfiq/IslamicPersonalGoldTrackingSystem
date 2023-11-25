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
        'safekeep_rate1',
        'safekeep_rate2',
        'safekeep_rate3',
        'agent_name',
        'agent_contact_num',
        'email',
        'hotline',
        'address',
        'coordinate',
        'sun_start',
        'sun_end',
        'mon_start',
        'mon_end',
        'tue_start',
        'tue_end',
        'wed_start',
        'wed_end',
        'thu_start',
        'thu_end',
        'fri_start',
        'fri_end',
        'sat_start',
        'sat_end',
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
