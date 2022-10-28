<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticlesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $category = $this->relationLoaded('category') ? $this->whenLoaded('category') : null;
        $articles = $this->relationLoaded('articles') ? $this->whenLoaded('articles') : null;

        return [
            '_id'           =>  $this->_id,
            'id_articles'   =>  $this->id_articles,
            $this->mergeWhen($articles, fn()=> [
                'name_article' =>  $articles->name,
                'description_article' =>  $articles->description
            ]),
            'id_category'   =>  $this->id_category,
            $this->mergeWhen($category, fn()=> [
                'name_category' =>  $category->name
            ]),
            'status'        =>  $this->status,
        ];
    }
}
