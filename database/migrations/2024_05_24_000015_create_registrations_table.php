<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('title');
            $table->string('full_name');
            $table->string('gender');
            $table->string('institution');
            $table->string('profession')->nullable();
            $table->string('current_position')->nullable();
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('research_field')->nullable();
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
