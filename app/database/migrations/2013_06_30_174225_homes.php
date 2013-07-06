<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Homes extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function(Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->integer('proptype_id');
            $table->foreign('proptype')->references('id')->on('proptype'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homes');
    }

}
