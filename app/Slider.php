<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\uploadable\uploadable;
class Slider extends Model
{
    use uploadable;
    protected $fillable = array('title', 'text','img');
}
