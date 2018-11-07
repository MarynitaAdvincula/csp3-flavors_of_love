<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('author_ID');
        $table->unsignedInteger('category_ID')->nullable();
        $table->text('post_title');
        $table->longText('post_content');
        $table->unsignedInteger('post_type');        
        $table->timestamps();
        

        //Relationships
        $table->foreign('author_ID')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');

        $table->foreign('category_ID')->references('id')->on('categories')->onDelete('restrict')->onUpdate('cascade');

        $table->foreign('post_type')->references('id')->on('post_types')->onDelete('restrict')->onUpdate('cascade');

        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
