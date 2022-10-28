<?php

namespace App\Services;

use App\Http\Resources\ArticlesResource;
use App\Models\DetailCategoryArticles;

class ArticlesServices
{
    public function searchArticle($params)
    {
        try {
            $query = DetailCategoryArticles::where('status', 1)
                ->whereHas('articles', function($q) use ($params){
                    if (isset($params['name'])) {
                        $q->where('name','LIKE','%'.$params['name'].'%');
                    }
                    if (isset($params['description'])) {
                        $q->where('description','LIKE','%'.$params['description'].'%');
                    }
                        $q->where('status', 1);

                })->get()->load('category', 'articles');

            if (count($query) > 0) {
                $data = ArticlesResource::collection($query);

                return $data;
            }
            return[
                'status'    =>  false,
                'message'   =>  'No data'
            ];
            return $query;
        } catch (\Throwable $th) {
            // throw $th;
            return[
                'status'    =>  false,
                'message'   =>  'No data'
            ];
        }
    }
}
