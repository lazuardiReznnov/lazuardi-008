<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'inv';
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}