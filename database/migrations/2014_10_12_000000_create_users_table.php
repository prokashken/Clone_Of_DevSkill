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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image_path')->nullable();
            $table->string('mbl_country')->nullable();
            $table->string('mbl_number')->nullable();
            $table->text('biography')->nullable();
            $table->string('currently')->nullable();
            $table->string('university')->nullable();
            $table->string('inerested_tpc')->nullable();
            $table->string('linkdin_link')->nullable();
            $table->string('timezone')->nullable();
            $table->string('country')->nullable();
            $table->string('gender')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->string('ref_own')->unique()->nullable();
            $table->string('ref_by')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->boolean('instructor')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
