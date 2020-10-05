<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Business extends Model
{

    protected $fillable = [
        'subject_name',
        'category_id' ,
        'initial_capital',
        'legale_status' ,
        'status'  ,
        'creation_year',
        'nuis' ,
        'phone'  ,
        'email'  ,
        'description',
        'company_service_description' ,
        'state_id' ,
        'city_id',
        'official_address',
        'verified' ,
        'adm_first_name',
        'adm_last_name',
        'adm_phone' ,
        'adm_email' ,
        'adm_percentage' ,
        'latitude',
        'longtitude',

    ];

    public function getLogoAttribute($value)
    {
        return asset('storage/'.$value);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function docs(){
        return $this->hasMany(Doc::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('companies.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }

}
