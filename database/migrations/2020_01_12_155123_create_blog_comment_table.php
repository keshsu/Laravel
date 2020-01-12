<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog_comment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned()->index();
            $table->string('comment');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->boolean('mark_read');
            $table->boolean('status');
            $table->foreign('post_id')->references('id')->on('tbl_blog_post');
            $table->foreign('user_id')->references('id')->on('tbl_blog_user');
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
        Schema::dropIfExists('tbl_blog_comment');
    }
}
