<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models',function(Blueprint $table){
        $table->increments('id');
        $table->string('name');

        $table->integer('mark_id')->unsigned();
        $table->foreign('mark_id')->references('id')->on('marks')->onDelete('cascade')->onUpdate('cascade');

        $table->date('year_of_made');
        $table->integer('status')->default(1); // 1 is ON 
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
         // that is for drop column foreign key
       Schema::create('marks', function (Blueprint $table) {
        $table->dropColumn('mark_id');
    });
        Schema::drop('models');
    }
}
