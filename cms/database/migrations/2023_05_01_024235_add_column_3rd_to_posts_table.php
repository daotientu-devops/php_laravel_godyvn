<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn3rdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('tips')->after('content')->nullable();
            $table->string('start_date', 20)->after('price')->nullable();
            $table->unsignedSmallInteger('duration')->after('start_date')->default(0);
            $table->string('cost')->after('duration')->nullable();
            $table->string('continent')->after('address')->nullable();
            $table->string('country')->after('continent')->nullable();
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
