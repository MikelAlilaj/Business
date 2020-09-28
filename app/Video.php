<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{




    protected $fillable = ['business_id' , 'file'];





//    public function getFileAttribute($video){
//
//
//        return asset('storage/businessVideos/'.$video);
//
//
//    }

}
