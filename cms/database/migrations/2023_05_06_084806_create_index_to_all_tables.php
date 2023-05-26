<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexToAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->index(array('status'), 'index_posts');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->index(array('status'), 'index_pages');
        });
        Schema::table('password_resets', function (Blueprint $table) {
            $table->index(array('email', 'token'), 'index_password_resets');
        });
        Schema::table('customers', function (Blueprint $table) {
            $table->index(array('email'), 'index_customers');
        });
        Schema::table('locations', function (Blueprint $table) {
            $table->index(array('hot_location'), 'index_locations');
        });
        Schema::table('widgets', function (Blueprint $table) {
            $table->index(array('key'), 'index_widgets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
