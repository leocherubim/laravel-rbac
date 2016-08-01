<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleObjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rbac_role_object', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('object_id')->unsigned();

            $table->foreign('role_id')
                  ->references('id')
                  ->on('rbac_roles')
                  ->onDelete('cascade');

            $table->foreign('object_id')
                  ->references('id')
                  ->on('rbac_protection_objects')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rbac_role_object');
    }
}
