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
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('subtitle')->nullable(); 
            $table->longText('description');
            $table->longText('feature')->nullable();
            $table->integer('category_id');
            $table->string('feature_image');
            $table->string('feature_video')->nullable();
            $table->string('lecture_amount');
            $table->string('exam_amount');
            $table->string('project_amount')->nullable();
            $table->string('language')->default('bangla');
            $table->string('type_offline')->default('yes');
            $table->string('type_online')->default('yes');
            $table->string('course_fee_offline')->nullable();
            $table->string('course_fee_online')->nullable();
            $table->string('course_discount_offline')->nullable();
            $table->string('course_discount_online')->nullable();
            $table->string('course_duration_offline')->nullable();
            $table->string('course_duration_online')->nullable();
            $table->string('coupon_status')->default('no');
            $table->string('module')->nullable();
            $table->integer('mentor_id')->nullable();
            $table->string('status')->default('active');
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
