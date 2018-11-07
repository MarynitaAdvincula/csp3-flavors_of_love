<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('post_ID');
        $table->unsignedInteger('comment_author');
        $table->string('comment_author_email', 100);
        $table->string('comment_author_url', 200);
        $table->string('comment_author_IP', 100);
        $table->text('comment_content');
        $table->string('comment_approved', 20);
        $table->unsignedInteger('user_id');
        $table->timestamps();

        //Relationships
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('restrict')->onUpdate('cascade');

        $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
