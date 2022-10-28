<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeed extends Seeder
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

    public function runDataDefault(){
        $now = (string)now();
        /* Lacteos */
        DB::table('col_articles')->insert([
            'name'          =>  'Queso',
            'descripction'  =>  'Alimento sólido que se obtiene por maduración de la cuajada',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Leche',
            'descripction'  =>  'Es el único fluido que ingieren las crías de los mamíferos',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Yogurt',
            'descripction'  =>  'Es un producto lácteo obtenido mediante la fermentación de la leche​',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Mantequilla',
            'descripction'  =>  'Es una emulsión más o menos sólida',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Helado',
            'descripction'  =>  'Es un alimento congelado que por lo general se hace de productos lácteos',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        /* Cereales */
        DB::table('col_articles')->insert([
            'name'          =>  'Avena',
            'descripction'  =>  'Es un género de plantas de la familia de las poáceas',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Pan',
            'descripction'  =>  'Es un alimento básico que forma parte de la dieta tradicional',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Arroz',
            'descripction'  =>  'Es un cereal considerado alimento básico en muchas gastronomías del mundo',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Fideos',
            'descripction'  =>  'Son un tipo de pasta con forma alargada',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_articles')->insert([
            'name'          =>  'Galletas',
            'descripction'  =>  'Es una preparación culinaria de pequeño tamaño, dulce o salada, horneada',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);

    }

    public function runDataFake() {
    }
}
