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
        Schema::create('boxes', function (Blueprint $table) {
            $table->id()->startingValue(1);

            // $table->bigInteger('user_id')->unsigned()->nullable();
            // //   $table->foreignId('user_id')
            // //   ->constrained('users');
            //  $table->foreign('user_id')
            //  ->references('id')->on('users')
            //  ->nullOnDelete();

             $table->string('number');
             $table->string('phone');
             $table->string('user');


            //  $table->string('name');




             $table->foreignId('area_id')
            ->constrained('areas', 'id')
            ->cascadeOnDelete();

            //  $table->bigInteger('area_id')->unsigned();

            //   $table->foreign('area_id')
            //  ->references('id')->on('areas')
            //   ->cascadeOnDelete();

              $table->timestamps();
        //     $table->id();
        //    // $table->bigInteger('id_box')->unsigned()->autoIncrement()->primary();
        //     $table->foreignId('user_id')
        //             ->constrained('users','id');

        //      $table->foreignId('area_id')
        //             ->constrained('areas','id');


        //     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxes');
    }
};
