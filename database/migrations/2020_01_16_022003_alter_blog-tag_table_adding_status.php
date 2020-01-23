<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBlogTagTableAddingStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_blog_tag', function (Blueprint $table) {
            $table->enum('status',['active','not-active'])->after('tag_clean');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_blog_tag', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
