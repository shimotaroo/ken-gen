<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('symbol', 5)->index()->comment('権限記号');
            $table->string('number', 5)->comment('権限番号');
            $table->unsignedInteger('owner_description_id')->comment('所有者の権限');
            $table->unsignedInteger('group_description_id')->comment('所有グループの権限');
            $table->unsignedInteger('other_description_id')->comment('その他の権限');
            $table->timestamps();

            $table->foreign('owner_description_id')->references('id')->on('permission_descriptions')->onDelete('cascade');
            $table->foreign('group_description_id')->references('id')->on('permission_descriptions')->onDelete('cascade');
            $table->foreign('other_description_id')->references('id')->on('permission_descriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
