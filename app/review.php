<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable=['review','rating','foodtruck_id','user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getStarsAttribute($value){

        $r=$this->rating;
        if($r>4){
            echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
            ';
            return ;
        }elseif ($r>3) {
            echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
            ';
            return ;
        }elseif ($r>2) {
            echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
            ';
            return ;
        }
        elseif ($r>1) {
            echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
            ';
            return ;
        }
        elseif ($r>0) {
            echo '
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
            ';
            return ;
        }
    }
}
