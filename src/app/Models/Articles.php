<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Articles extends MongoModel
{
    use HasFactory;

    protected $collection = 'col_articles';

    protected $primaryKey='_id';

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
