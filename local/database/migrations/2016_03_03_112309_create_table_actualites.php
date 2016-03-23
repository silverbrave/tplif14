<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActualites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->longText('description');
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
        Schema::drop('actualites');
    }
}
