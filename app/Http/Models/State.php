<?php

namespace Grunenthal\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "states";
    protected $fillable = ['state'];
    protected $guarded = ['id'];


    public function users()
    {
        return $this->hasMany('Grunenthal\Models\User');
    }
    public function challenges()
    {
        return $this->hasMany('Grunenthal\Models\Challenge');
    }
    public function questions()
    {
        return $this->hasMany('Grunenthal\Models\Question');
    }
}
