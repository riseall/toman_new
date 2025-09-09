<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKalibrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalibrasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('npwp', 50);
            $table->string('npwp_address', 100);
            $table->string('fax', 100);
            $table->string('tool_name', 100);
            $table->string('tool_spec', 100);
            $table->string('tool_brand', 100);
            $table->string('tool_type', 100);
            $table->string('tool_no', 100);
            $table->string('tool_amount', 100);
            $table->string('certif_cp', 100);
            $table->string('cal_range', 100);
            $table->string('certif_name', 100);
            $table->string('certif_no', 100);
            $table->string('certif_address', 100);
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
        Schema::dropIfExists('kalibrasi');
    }
}
