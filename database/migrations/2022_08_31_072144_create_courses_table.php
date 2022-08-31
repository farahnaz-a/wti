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
            $table->integer('category_id');
            $table->string('feature_image');
            $table->string('feature_video')->nullable();
            $table->integer('lecture_amount');
            $table->integer('exam_amount');
            $table->longText('description');
            $table->string('language')->default('bangla');
            $table->string('type_offline')->default('yes');
            $table->string('type_online')->default('yes');
            $table->float('course_fee_offline')->nullable();
            $table->float('course_fee_online')->nullable();
            $table->float('course_discount_offline')->nullable();
            $table->float('course_discount_online')->nullable();
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
