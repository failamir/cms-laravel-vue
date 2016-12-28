<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->integer('featured')->default(0);
            $table->string('featured_img', 100)->default('');
            $table->string('post_link');
            $table->string('post_type');
            $table->integer('post_weight')->default(0);
            $table->integer('post_view')->default(0);
            $table->string('post_active',3)->default('yes');
            $table->integer('staff_id')->default(0);
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
        Schema::drop('bp_post');
    }
}
