<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('col_detail_category_articles', function (Blueprint $table) {
            $table->id();
            $table->text('id_category');
            $table->foreign('id_category')->references('_id')->on('col_category');
            $table->text('id_articles');
            $table->foreign('id_articles')->references('_id')->on('col_articles');
            $table->char('status',1)->default(1)->comment('0=Inactivo, 1=Activo y 2=Eliminado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('col_detail_category_articles');
    }
};
