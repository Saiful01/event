<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrganizationCommitteesTable extends Migration
{
    public function up()
    {
        Schema::table('organization_committees', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_9815377')->references('id')->on('committee_categories');
        });
    }
}
