<?php

namespace App;
use App\User;
use App\Company;
use App\Form;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'position', 'setor']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function form()
    {
        return $this->hasMany(Form::class);
    }

}
