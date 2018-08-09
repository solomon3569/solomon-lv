<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminAcountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminacount', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aa_id');
            $table->string('aa_name');
            $table->string('aa_email')->unique();
            $table->string('aa_password');
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
        // $from = 'adminacount';
        // $to = 'adminaccount';
        // Schema::rename($from, $to);
        Schema::dropIfExists('adminacount');
    }
}
