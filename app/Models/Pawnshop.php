<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pawnshop extends Model
{
    use HasFactory;
    use Searchable;

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


    public function toSearchableArray()
    {
        return [
            'arrahnu_type' => $this->arrahnu_type,
            'arrahnu_name' => $this->arrahnu_name,
            'margin' => $this->margin,
            'address' => $this->address,
        ];
    }
}
