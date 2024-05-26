<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbstructSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('abstruct_submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
