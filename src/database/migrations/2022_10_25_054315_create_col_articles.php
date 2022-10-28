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
        Schema::create('col_articles', function (Blueprint $table) {
            $table->string('name',100);
            $table->string('description',100);
            $table->char('status',1)->default(1)->comment('0=Inactivo, 1=Activo y 2=Eliminado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('col_articles');
    }
};
