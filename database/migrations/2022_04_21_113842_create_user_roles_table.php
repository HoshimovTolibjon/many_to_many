<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{

    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->integer("user_id");
            $table->integer("role_id");
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
