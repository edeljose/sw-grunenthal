<?php

namespace Grunenthal;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "states";
    protected $fillable = ['state'];
    protected $guarded = ['id'];


    public function users()
    {
        return $this->hasMany('Grunenthal\User');
    }
    public function challenges()
    {
        return $this->hasMany('Grunenthal\Challenge');
    }
    public function questions()
    {
        return $this->hasMany('Grunenthal\Question');
    }
}
