<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('confirmed')->default(0);
            $table->boolean('super_admin')->default(0);
            $table->string('token',245)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients')->omDelete('cascade')->onUpdate('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::dropIfExists('users');*/
    }
}
