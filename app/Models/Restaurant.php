<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        'business_name',
        'address',
        'P_IVA',
        'phone',
        'cover_image'
        
    ];
   
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }  
}
