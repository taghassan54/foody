<?php
namespace App\Traits\Ratable;

/**
 * trait Ratable
 */
trait Ratable
{

    public function review()
    {
        return $this->hasMany('App\review','foodtruck_id');
    }

    public function getRatingAttribute($value){
        return  $this->accountRating($this->review,$this->review->count());
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

}
