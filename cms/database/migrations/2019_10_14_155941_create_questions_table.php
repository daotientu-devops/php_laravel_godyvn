<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->bigInteger('customer_id')->nullable()->default(0);
            $table->string('author_name', 50);
            $table->text('question');
            $table->text('slug');
            $table->string('status', 15);
            $table->string('published_at', 15)->nullable();
            $table->integer('category_id');
            $table->integer('disease_id')->nullable()->default(0);
            $table->text('tags')->nullable();
            $table->string('fullname', 50)->nullable();
            $table->unsignedTinyInteger('age')->nullable()->default(0);
            $table->string('email', 100)->nullable();
            $table->tinyInteger('sex')->nullable()->default(-1);
            $table->unsignedTinyInteger('is_highlight')->nullable()->default(0);
            $table->unsignedTinyInteger('has_answer')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
