<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * User: MB
 * Date: 8/4/2019
 */
class Post extends Model {

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body'
    ];
}
