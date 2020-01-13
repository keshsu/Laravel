<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('display_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['male','female']);
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->string('website');
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
        Schema::dropIfExists('tbl_blog_user');
    }
}
