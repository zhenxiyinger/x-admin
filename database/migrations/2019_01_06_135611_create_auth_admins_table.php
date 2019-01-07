<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username','64');
            $table->string('password','64');
            $table->string('real_name','64');
            $table->string('mobile','20');
            $table->string('last_ip','20');
            $table->tinyInteger('status');
            $table->rememberToken();
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
        Schema::dropIfExists('auth_admins');
    }
}
