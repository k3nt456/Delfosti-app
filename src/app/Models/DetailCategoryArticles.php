<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DetailCategoryArticles extends MongoModel
{
    use HasFactory;

    protected $collection = 'col_detail_category_articles';

    protected $primaryKey='_id';

    public $timestamps = false;

    protected $fillable = [
        'id_category',
        'id_articles',
        'status'
    ];

    public function category(): HasOne
    {
        return $this->HasOne(Category::class, '_id', 'id_category');
    }

    public function articles(): HasOne
    {
        return $this->HasOne(Articles::class, '_id', 'id_articles');
    }
}
