<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('date');
            $table->date('start_date');
            $table->string('university')->nullable();
            $table->string('address')->nullable();
            $table->longText('registration_rules')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
