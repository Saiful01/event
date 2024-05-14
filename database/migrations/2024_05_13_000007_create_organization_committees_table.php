<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationCommitteesTable extends Migration
{
    public function up()
    {
        Schema::create('organization_committees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('designation')->nullable();
            $table->longText('details')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
