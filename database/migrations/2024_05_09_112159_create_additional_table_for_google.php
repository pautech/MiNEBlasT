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
        Schema::table('users', function (Blueprint $table) {    // add the below column to "users" table
            $table->string('name')->nullable();    // add social_id column with varchar type
            $table->string('social_type')->default('google');  // add social_type column with varchar type
            $table->string('social_username')->nullable();  // add username column with varchar type
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('social_type');
            $table->dropColumn('social_username');
        });

    }
};
