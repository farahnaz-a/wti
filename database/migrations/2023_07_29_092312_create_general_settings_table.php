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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('favicon');
            $table->string('phone');
            $table->string('email');
            $table->string('whatsapp_number')->nullable();
            $table->text('address')->nullable();
            $table->text('facebook_group_name')->nullable();
            $table->text('facebook_group_link')->nullable();
            $table->text('facebook_page_name')->nullable();
            $table->text('facebook_page_link')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
