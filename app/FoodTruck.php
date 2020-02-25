<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\uploadable\uploadable;
use App\Traits\Ratable\Ratable;

class FoodTruck extends Model
{
    use uploadable,Ratable;
    protected $table = 'foodtruck';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'img','user_id','fee', 'owner', 'description', 'city_id', 'long', 'lat', 'status');

    public function city()
    {
        return $this->belongsTo('App\Cities');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function meals()
    {
        return $this->hasMany('App\Meals','foodtruck_id');
    }



}
