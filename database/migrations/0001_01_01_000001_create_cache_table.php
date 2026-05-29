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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
<<<<<<< HEAD
            $table->bigInteger('expiration')->index();
=======
            $table->integer('expiration')->index();
>>>>>>> d6cf073b0dba4e16648d5338f3aac2e60336f8ad
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
<<<<<<< HEAD
            $table->bigInteger('expiration')->index();
=======
            $table->integer('expiration')->index();
>>>>>>> d6cf073b0dba4e16648d5338f3aac2e60336f8ad
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
