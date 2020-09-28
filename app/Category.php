<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\Searchable\SearchResult;

class Category extends Model
{

    protected $fillable = ['name'];

    public function getImageAttribute($value)
    {
        return asset('storage/categoryImage/'.$value);
    }

}
