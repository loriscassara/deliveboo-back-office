<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
        'address',
        'notes',
        'paid',
        'total'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('item_quantity');
    }
}
