<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmaterial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('id_ref');
            $table->string('name_ref');
            $table->string('intro_ref');
            $table->string('raw_material');
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
        Schema::dropIfExists('addmaterial');
    }
}
