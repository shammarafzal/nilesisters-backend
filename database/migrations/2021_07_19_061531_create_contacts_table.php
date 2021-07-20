<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->string('address');
            $table->string('english_phone');
            $table->string('spanish_phone');
            $table->string('email');
            $table->string('facebook_page_1');
            $table->string('facebook_page_2')->nullable();
            $table->string('instagram_page_1');
            $table->string('instagram_page_2')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
