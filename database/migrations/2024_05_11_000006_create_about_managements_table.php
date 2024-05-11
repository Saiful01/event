<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutManagementsTable extends Migration
{
    public function up()
    {
        Schema::create('about_managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('welcome_message')->nullable();
            $table->longText('about_text')->nullable();
            $table->longText('about_the_conference')->nullable();
            $table->longText('scope_of_the_conference')->nullable();
            $table->longText('program_schedule')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
