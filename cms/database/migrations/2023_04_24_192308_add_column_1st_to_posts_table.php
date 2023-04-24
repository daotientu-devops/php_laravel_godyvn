<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn1stToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedTinyInteger('is_editor_picked')->after('is_highlight')->default(0);
            $table->unsignedTinyInteger('is_most_viewed')->after('is_editor_picked')->default(0);
            $table->unsignedTinyInteger('is_sponsored')->after('is_most_viewed')->default(0);
            $table->string('has_tags')->after('is_sponsored')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
