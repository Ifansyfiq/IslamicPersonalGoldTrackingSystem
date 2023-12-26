<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Gold extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'gold_name',
        'gold_purity',
        'weight',
        'purchase_date',
        'purchase_time',
        'purchase_from',
        'status',
        'buy_price',
        'sell_price',
        'spread',
        'gold_image',
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

    public function toSearchableArray()
    {
        return [
            'gold_name' => $this->gold_name,
            'gold_purity' => $this->gold_purity,
            'weight' => $this->weight,
            'purchase_date' => $this->purchase_date,
            'purchase_time' => $this->purchase_time,
            'purchase_from' => $this->purchase_from,
            'status' => $this->status,
        ];
    }
}
