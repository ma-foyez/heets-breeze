<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->text('website_slogan')->nullable();
            $table->string('website_logo');
            $table->string('website_favicon');
            $table->text('website_description');
            $table->string('office_address');
            $table->longText('about_content');
            $table->string('about_image');
            $table->string('website_email');
            $table->string('website_phone');
            $table->string('whatsapp_number')->nullable();
            $table->string('facebook_page')->nullable();
            $table->string('instagram_page')->nullable();
            $table->string('linkedin_page')->nullable();
            $table->string('skype')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('content');
    }
}
