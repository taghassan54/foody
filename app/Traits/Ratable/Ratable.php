<?php
namespace App\Traits\Ratable;

/**
 * trait Ratable
 */
trait Ratable
{

    public function reviews()
    {
        return $this->hasMany('App\review','foodtruck_id')->orderBy('created_at','ASC');
    }


    public function getRatingAttribute($value){
        return  $this->accountRating($this->reviews,$this->reviews->count());
    }

    public static function accountRating($rateArray, $count)
    {

        $total = 0;
        foreach ($rateArray as $rate) {
            switch ($rate->rating) {
                case 1:
                    $total += 0;
                    break;
                case 2:
                    $total += 25;
                    break;
                case 3:
                    $total += 50;
                    break;
                case 4:
                    $total += 75;
                    break;
                case 5:
                    $total += 100;
                    break;
            }
        }
        if ($count > 0) {
            return $total / $count / 20;
        } else {
            return 0;
        }
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
