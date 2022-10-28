<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
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
        $cat1 = Category::create([
            'name'          =>  'Lácteos',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);


        DB::table('col_category')->insert([
            'name'          =>  'Lácteos',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
        DB::table('col_category')->insert([
            'name'          =>  'Cereales',
            'created_at'    =>  $now,
            'updated_at'    =>  $now
        ]);
    }

    public function runDataFake() {
    }
}
