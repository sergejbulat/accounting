<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('rule_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rule_id')->references('id')->on('rules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_rules');
    }
}
