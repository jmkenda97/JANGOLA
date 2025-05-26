<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone',45)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('google_id',45)->nullable();
            $table->string('facebook_id',45)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};




/*<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cars_features', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->primary();
            $table->boolean('abs')->default(0);
            $table->boolean('air_conditioning')->default(0);
            $table->boolean('power_windows')->default(0);
            $table->boolean('power_door_locks')->default(0);
            $table->boolean('cruise_control')->default(0);
            $table->boolean('bluotooth_control')->default(0);
            $table->boolean('remote_start')->default(0);
            $table->boolean('gps_navigation')->default(0);
            $table->boolean('heated_seats')->default(0);
            $table->boolean('climate_control')->default(0);
            $table->boolean('rear_parking_sensors')->default(0);
            $table->boolean('leather_seats')->default(0);


        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cars_features');
    }
};*/

