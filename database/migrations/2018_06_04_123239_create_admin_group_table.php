<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admingroup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ag_name', 10)->comment('用用戶群組');
            $table->boolean('ag_isEnabled');
            $table->boolean('ag_isDel');
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
        Schema::dropIfExists('admingroup');
    }
}
