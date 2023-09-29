<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldType extends Model
{
    use HasFactory;

    protected $fillable = [
        'gold_type',

    ];

    public function gold() 
    {
        return $this->belongsTo(Gold::class);
    }
}
