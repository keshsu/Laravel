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
            $table->string('clean_title')->nullable();
            $table->string('file')->nullable();
            $table->string('blog_tag');
            $table->timestamp('date_published')->nullable();
            $table->string('banner_image')->nullable();
            $table->boolean('featured')->nullable();
            $table->enum('status',['active','not-active'])->nullable();
            $table->boolean('comment_enabled')->nullable();
            $table->integer('views')->nullable();
            $table->foreign('author_id')->references('id')->on('tbl_blog_user');
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
