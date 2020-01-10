<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "states";
    protected $fillable = ['state'];
    protected $guarded = ['id'];


    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function challenges()
    {
        return $this->hasMany('App\Challenge');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
