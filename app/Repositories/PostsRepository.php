<?php

namespace App\Repositories;

use App\Models\Posts;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostsRepository
 * @package App\Repositories
 * @version August 10, 2017, 7:48 am UTC
 *
 * @method Posts findWithoutFail($id, $columns = ['*'])
 * @method Posts find($id, $columns = ['*'])
 * @method Posts first($columns = ['*'])
*/
class PostsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'preview',
        'user_id',
        'time',
        'picture',
        'detail'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Posts::class;
    }
}
