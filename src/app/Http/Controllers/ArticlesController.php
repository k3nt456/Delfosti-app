<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use App\Services\ArticlesServices;
use App\Traits\HasResponse;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    use HasResponse;
    /** @var ArticlesServices*/
    private $articlesServices;

    public function __construct(ArticlesServices $articlesServices)
    {
        $this->articlesServices = $articlesServices;
    }

    public function search(ArticlesRequest $request)
    {
        $data = $this->articlesServices->searchArticle($request->validated());

        return $this->successResponse($data);
    }
}
