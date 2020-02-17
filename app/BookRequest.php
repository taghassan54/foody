<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BookRequest
 * @package App\Models
 * @version February 17, 2020, 2:38 am UTC
 *
 * @property string date
 * @property time starttime
 * @property time endtime
 * @property string number_of_eaters
 * @property string name
 * @property string email
 * @property string phone
 */
class BookRequest extends Model
{
    use SoftDeletes;

    public $table = 'bookrrequest';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'date',
        'starttime',
        'endtime',
        'number_of_eaters',
        'name',
        'email',
        'foodtruck_id',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'number_of_eaters' => 'string',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];




}
