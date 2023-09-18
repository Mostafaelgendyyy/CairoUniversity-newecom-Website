<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursesgrades', function (Blueprint $table) {
            $table->id();
            $table->string('Coursename')->nullable();
            $table->string('userid');
            $table->string('Midterm')->nullable();
            $table->string('Teamwork')->nullable();
            $table->string('Final')->nullable();
            $table->string('Total')->nullable();

            
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
        Schema::dropIfExists('coursesgrades');
    }
}
