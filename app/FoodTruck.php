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
    public function getChatAttribute()
    {
    return \App\Chat::where([['from',$this->id],['sender','food-truck']])->orWhere([['to',$this->id],['sender','user']]);
    }
    public function getChatWithAttribute()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        $col = collect();
        foreach ($users as $user) {
            if ($this->chatWith($user))
                $col->push($user);
        }
    return  $col;
    }

    public static function chatWith($user)
    {
        if (Chat::where([['from',$user->id],['sender','food-truck']])->orWhere([['to',$user->id],['sender','user']])->count() > 0)
            return true;
        else
            return false;
    }

    public function GetChatWith($id){
        return \App\Chat::where([['from',$this->id],['to',$id],['sender','food-truck']])->orWhere([['to',$this->id],['from',$id],['sender','user']]);
    }


}
