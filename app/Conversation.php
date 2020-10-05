<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //
    protected $fillable = ['from','to'];

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
