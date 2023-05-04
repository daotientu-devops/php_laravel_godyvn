<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn4thToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('email')->after('subdistrict')->nullable();
            $table->string('telephone', 15)->after('email')->nullable();
            $table->string('latitude', 15)->after('telephone')->nullable(); // Vĩ độ
            $table->string('longitude', 15)->after('latitude')->nullable(); // Kinh độ
            $table->string('website')->after('longitude')->nullable();
            $table->string('open_time')->after('website')->nullable();
            $table->string('ticket_price')->after('open_time')->nullable();
            $table->string('original_url')->after('ticket_price')->nullable();
            $table->integer('customer_id')->after('user_id')->default(0);
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
