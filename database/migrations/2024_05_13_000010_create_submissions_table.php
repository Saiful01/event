<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('abstract')->nullable();
            $table->longText('full_paper')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
