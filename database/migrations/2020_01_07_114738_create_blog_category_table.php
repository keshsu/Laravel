<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //for storing the name of the category
            $table->string('name_clean')->nullable();   //for the clean atmost category name
            $table->enum('status',['active','not-active']);  //enabled or disable the followinng category
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
        Schema::dropIfExists('tbl_blog_category');
    }
}
