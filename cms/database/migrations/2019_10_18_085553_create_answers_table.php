<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('author_name', 50);
            $table->text('answer');
            $table->text('slug');
            $table->string('status', 20);
            $table->string('published_at', 20)->nullable();
            $table->bigInteger('question_id');
            $table->string('created_by', 50)->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->unsignedTinyInteger('is_deleted')->nullable()->default(0);
            $table->string('deleted_by', 50)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->unsignedTinyInteger('is_published')->nullable()->default(0);
            $table->string('published_by', 50)->nullable();
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
        Schema::dropIfExists('answers');
    }
}
