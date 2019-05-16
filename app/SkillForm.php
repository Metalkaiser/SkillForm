<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillForm extends Model
{
    protected $fillable = [
        'name', 'email', 'skill',
    ];
}
