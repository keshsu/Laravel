<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('author_id')->unsigned()->index();
            $table->string('title');
            $table->string('clean_title');
            $table->string('file');
            $table->bigInteger('blog_tag')->unsigned()->index();
            $table->timestamp('date_published');
            $table->string('banner_image');
            $table->boolean('featured');
            $table->enum('status',['active','not-active']);
            $table->boolean('comment_enabled');
            $table->integer('views');
            $table->foreign('author_id')->references('id')->on('tbl_blog_user');
            $table->foreign('blog_tag')->references('id')->on('tbl_blog_tag');
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
        Schema::dropIfExists('tbl_blog_post');
    }
}
