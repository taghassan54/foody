<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cities extends Model
{

    protected $table = 'cities';
    public $timestamps = true;

    use SoftDeletes;
    protected $fillable=['name'];
    protected $dates = ['deleted_at'];

}
