<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenusTable extends Migration
{
    public function up()
    {
        Schema::create('venus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('suggested_accommodation');
            $table->longText('host_venu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
