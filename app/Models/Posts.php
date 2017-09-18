<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Posts
 * @package App\Models
 * @version August 10, 2017, 7:48 am UTC
 *
 * @method static Posts find($id=null, $columns = array())
 * @method static Posts|\Illuminate\Database\Eloquent\Collection findOrFail($id, $columns = ['*'])
 * @property string name
 * @property string preview
 * @property integer user_id
 * @property date time
 * @property string picture
 * @property string detail
 */
class Posts extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'preview',
        'user_id',
        'time',
        'picture',
        'detail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'preview' => 'string',
        'user_id' => 'integer',
        'time' => 'date',
        'picture' => 'string',
        'detail' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'preview' => 'required',
        'user_id' => 'required',
        'time' => 'required',
        'picture' => 'required',
        'detail' => 'required'
    ];

    
}
