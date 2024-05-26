<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportantDatesTable extends Migration
{
    public function up()
    {
        Schema::create('important_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
