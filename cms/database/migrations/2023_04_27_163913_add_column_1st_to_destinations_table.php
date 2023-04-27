<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn1stToDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->text('album')->after('content')->nullable();
            $table->unsignedTinyInteger('top_search')->after('author_name')->default(0);
            $table->unsignedTinyInteger('hot_location')->after('top_search')->default(0);
            $table->unsignedTinyInteger('popular_location')->after('hot_location')->default(0);
            $table->integer('reviews')->after('is_reviewed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('destinations', function (Blueprint $table) {
            //
        });
    }
}
