<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn1stToCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('password')->after('email');
            $table->text('list_post_ids')->after('number_of_employees')->nullable();
            $table->unsignedTinyInteger('is_blocked')->after('list_post_ids')->default(0);
            $table->string('type', 15)->after('is_blocked')->nullable(); // customer | collaborator | blogger
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
