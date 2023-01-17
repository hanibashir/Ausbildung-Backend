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
        Schema::create('auses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title');
            $table->string('image_url')->nullable();
            $table->string('required_certificate')->nullable();
            $table->string('training_duration')->nullable();
            $table->string('working_hours')->nullable();
            $table->float('salary_first_year')->default(0.0);
            $table->float('salary_second_year')->default(0.0);
            $table->float('salary_third_year')->default(0.0);
            $table->float('salary_fourth_year')->default(0.0);
            $table->longText('body');
            $table->longText('links')->nullable();
            $table->boolean('popular')->default(false);
            $table->boolean('best_paid')->default(false);
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
        Schema::dropIfExists('auses');
    }
};
