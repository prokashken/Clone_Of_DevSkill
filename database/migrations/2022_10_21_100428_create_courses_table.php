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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users');
            $table->string('title');
            $table->string('banner_path');
            $table->string('tag');
            $table->text('summary');
            $table->double('fee');
            $table->string('schedule');
            $table->date('srt_date');
            $table->double('discount')->nullable();
            $table->string('batch');
            $table->string('prerequisite');
            $table->date('last_date');
            $table->string('dbanner_path');
            $table->string('course_status')->default("Not Started");
            $table->string('class_link')->nullable();
            $table->string("status")->comment("Status for Admin to approved")->default("Pending");
            $table->string("next_class_date")->nullable();
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
        Schema::dropIfExists('courses');
    }
};
