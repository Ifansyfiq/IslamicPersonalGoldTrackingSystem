<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafeKeepRate extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'rate1',
        'rate2',
        'rate3',

    ];

    public function pawnshop() 
    {
        return $this->belongsTo(Pawnshop::class);
    }
}
