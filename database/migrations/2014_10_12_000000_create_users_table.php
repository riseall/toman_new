<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('negara')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('about')->nullable();
            $table->string('gender')->nullable();
            $table->string('photo')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->string('entity_code')->default('0');
            $table->string('entity_id')->default('0');
            $table->string('entity_name')->nullable();
            $table->boolean('is_toller')->default(0);
            $table->boolean('is_maklooner')->default(0);
            $table->timestamp('user_last_logon')->nullable();
            $table->string('user__char_01')->nullable();
            $table->integer('user__int_01')->nullable();
            $table->decimal('user__decimal_01', 20, 6)->nullable();
            $table->timestamp('user__date_01')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_accept')->default(0);
            $table->boolean('is_agree')->default(0);
            $table->boolean('is_agree_01')->default(0);
            $table->boolean('is_agree_02')->default(0);
            $table->boolean('is_agree_03')->default(0);
            $table->boolean('is_member')->default(0);
            $table->boolean('is_suspended')->default(0);
            $table->boolean('is_confirmed')->default(0);
            $table->boolean('is_verified')->default(0);
            $table->boolean('is_logged_in')->default(0);
            $table->boolean('is_logged_out')->default(0);
            $table->timestamp('login_time')->nullable();
            $table->timestamp('logout_time')->nullable();
            $table->boolean('accepted')->default(0);
            $table->boolean('rejected')->default(0);
            $table->boolean('remembered')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
