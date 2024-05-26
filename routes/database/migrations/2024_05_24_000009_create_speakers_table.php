<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('name');
            $table->string('designation')->nullable();
            $table->longText('details')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
