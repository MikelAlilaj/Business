<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{


    protected $fillable = ['business_id' , 'file'];


//    public function getFileAttribute($photo){
//
//
//
//
//        return $this->uploads . $photo;
//
//
//    }
//    public function getFileAttribute($photo)
//    {
//        return asset('storage/businessImages/'.$photo);
//    }



}
