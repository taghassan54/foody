<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\uploadable\uploadable;

class Meals extends Model
{
    use uploadable;

    protected $table = 'meals';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'price', 'img', 'category_id','foodtruck_id','description','is_special');
    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
