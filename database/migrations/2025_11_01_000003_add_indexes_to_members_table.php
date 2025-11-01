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
        Schema::table('members', function (Blueprint $table): void {
            // Add indexes to speed up common filters and sorts
            $table->index('name');
            $table->index('gender');
            $table->index('religion');
            $table->index('unit');
            $table->index('membership_type');
            $table->index('status');
            $table->index('job');
            $table->index('dob');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table): void {
            $table->dropIndex(['name']);
            $table->dropIndex(['gender']);
            $table->dropIndex(['religion']);
            $table->dropIndex(['unit']);
            $table->dropIndex(['membership_type']);
            $table->dropIndex(['status']);
            $table->dropIndex(['job']);
            $table->dropIndex(['dob']);
            $table->dropIndex(['created_at']);
        });
    }
};
