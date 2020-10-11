<?php

namespace App;
use App\Profile;
use App\user;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
