<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    use HasFactory;

    protected $fillable = [
        'gold_name',
        'gold_purity',
        'weight',
        'purchase_from',
        'status',
        'buy_price',
        'sell_price',
        'spread',
        'user_id',
        'goldtype_id',
    ];

    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    public function goldtype() 
    {
        return $this->belongsTo(GoldType::class, 'goldtype_id');
    }
}
