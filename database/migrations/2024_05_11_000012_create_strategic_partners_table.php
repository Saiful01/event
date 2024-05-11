<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicPartnersTable extends Migration
{
    public function up()
    {
        Schema::create('strategic_partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('details')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
