<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Foreign keys of challenge datails
        Schema::table('challenge_details', function ($table) {
           

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');

            $table->foreign('challenge_id')
                ->references('id')
                ->on('challenges')
                ->onUpdate('cascade');
        });

        Schema::table('users', function ($table) {

            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade');
            $table->foreign('rol_id')->references('id')->on('roles')->onUpdate('cascade');
        });
        Schema::table('categories', function ($table) {

            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onUpdate('cascade');
           
        });
         Schema::table('subcategories', function ($table) {

            $table->foreign('question_id')->references('id')->on('questions')->onUpdate('cascade');
           
        });
         Schema::table('questions', function ($table) {

            $table->foreign('answer_id')->references('id')->on('answers')->onUpdate('cascade');
           
        });
         Schema::table('challenges', function ($table) {

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alter_all_tables');
    }
}
