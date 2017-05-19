<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrevisionOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prevision_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamp('date');
            $table->double('amount')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prevision_operations', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'category_id']);
        });

        Schema::dropIfExists('prevision_operations');
    }
}