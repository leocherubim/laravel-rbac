<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectRightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rbac_object_right', function (Blueprint $table) {
            $table->integer('object_id')->unsigned();
            $table->integer('right_id')->unsigned();

            $table->foreign('object_id')
                  ->references('id')
                  ->on('rbac_protection_objects')
                  ->onDelete('cascade');

            $table->foreign('right_id')
                  ->references('id')
                  ->on('rbac_rights')
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
        Schema::drop('rbac_object_right');
    }
}
