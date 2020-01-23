<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakingUniqueEmailAndDisplayName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_blog_user', function (Blueprint $table) {
            $table->unique('email')->change();
            $table->unique('display_name')->change();
            $table->unique('contact')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_blog_user', function (Blueprint $table) {
            //
        });
    }
}
