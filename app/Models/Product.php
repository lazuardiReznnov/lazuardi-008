<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'merk'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function Merk()
    {
        return $this->belongsTo(merk::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Transaction()
    {
        return $this->hasMany(Transaction::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
