<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wainwright_settings', function (Blueprint $table) {
            $table->id('id')->index();
            $table->string('setting_key', 200);
            $table->string('setting_value', 1000);
            $table->string('category', 200)->nullable();
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
        Schema::dropIfExists('wainwright_settings');
    }
};