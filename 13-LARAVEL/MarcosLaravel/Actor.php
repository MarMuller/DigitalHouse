<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $guarded = [];
    //protected $table = "movies"
    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
        //return $this->title;
    // public function search(){
    //     return $this
    }
  
}
