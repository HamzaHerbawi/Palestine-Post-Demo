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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tracking_number');
            //$table->string('slug')->unique();
            $table->string('phone');
            $table->string('status');
            // , ['Pending', 'Not found', 'In transit', 'Expired', 'Pick up', 'Undelivered', 'Delivered', 'Alert']);
            $table->longText('StatusDescription')->nullable();
            $table->string('address')->nullable();
            //$table->date('birthday')->nullable();
            $table->foreignId('area_id')
            ->constrained('areas', 'id');

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
        Schema::dropIfExists('packages');
    }
};
