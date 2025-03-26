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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('subject');
            $table->timestamps();

            if (Schema::hasTable('notes')) {
                Schema::table('notes', function (Blueprint $table) {
                    if (!Schema::hasColumn('notes', 'subject')) {
                        $table->text('subject')->nullable(); // Add the column
                    }
                });
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
        if (Schema::hasTable('notes')) {
            Schema::table('notes', function (Blueprint $table) {
                $table->dropColumn('subject');
            });
        }
    }

};

