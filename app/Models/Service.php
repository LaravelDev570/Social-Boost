<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['category_id', 'name', 'description', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class, 'service_country');
    }
}
