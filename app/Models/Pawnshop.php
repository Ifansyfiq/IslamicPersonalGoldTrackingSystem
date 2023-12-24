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
        'website_link',
        'sun',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
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
