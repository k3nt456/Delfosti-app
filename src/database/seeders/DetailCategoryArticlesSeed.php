<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\Category;
use App\Models\DetailCategoryArticles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailCategoryArticlesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runDataDefault();
        if (env('PROJECT_MODE', 'prod') === 'dev') {
            $this->runDataFake();
        }
    }

    public function runDataDefault()
    {
        $now = (string)now();

        $category = ['Lácteos', 'Cereales'];

        $dairyName = ['Queso', 'Leche', 'Yogurt', 'Mantequilla', 'Helado'];
        $dairyDescription = [
            'Alimento sólido que se obtiene por maduración de la cuajada',
            'Es el único fluido que ingieren las crías de los mamíferos',
            'Es un producto lácteo obtenido mediante la fermentación de la leche​',
            'Es una emulsión más o menos sólida',
            'Es un alimento congelado que por lo general se hace de productos lácteos'
        ];

        $idCategory = Category::create([
            'name'          =>  $category[0],
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        for ($i = 0; $i < count($dairyName); $i++) {

            $article = Articles::create([
                'name'          =>  $dairyName[$i],
                'description'  =>  $dairyDescription[$i],
                'status'        =>  1,
                'created_at'    =>  $now,
                'updated_at'    =>  $now
            ]);
            DetailCategoryArticles::create([
                'id_category'   =>  $idCategory->_id,
                'id_articles'   =>  $article->_id,
                'status'        =>  1
            ]);
        }

        $cerealsName = ['Avena', 'Pan', 'Arroz', 'Fideos', 'Galletas'];
        $cerealsDescription = [
            'Es un género de plantas de la familia de las poáceas',
            'Es un alimento básico que forma parte de la dieta tradicional',
            'Es un cereal considerado alimento básico en muchas gastronomías del mundo',
            'Son un tipo de pasta con forma alargada',
            'Es una preparación culinaria de pequeño tamaño, dulce o salada, horneada'
        ];

        $idCategory = Category::create([
            'name'          =>  $category[1],
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        for ($i = 0; $i < count($cerealsName); $i++) {

            $article = Articles::create([
                'name'          =>  $cerealsName[$i],
                'description'  =>  $cerealsDescription[$i],
                'status'        =>  1,
                'created_at'    =>  $now,
                'updated_at'    =>  $now
            ]);
            DetailCategoryArticles::create([
                'id_category'   =>  $idCategory->_id,
                'id_articles'   =>  $article->_id,
                'status'        =>  1
            ]);
        }
    }

    public function runDataFake()
    {
    }
}
