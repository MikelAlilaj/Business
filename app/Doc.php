<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{



    protected $fillable = ['business_id', 'file'];


//    public function getFileAttribute($doc)
//    {
//        return asset('storage/businessDocs/'.$doc);
//    }

}
