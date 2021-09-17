<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
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
            $table->string('site_title');
            $table->string('tagline');
            $table->string('key_word');
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('admin_email');
            $table->string('membership')->default('1')->nullable()->comment('1=inactive, 2=active');
            $table->string('default_role');
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
}
