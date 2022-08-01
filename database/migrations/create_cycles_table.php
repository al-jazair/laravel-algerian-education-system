<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(config('algerian-education-system.cycles_table_name') ?? 'cycles', function (Blueprint $table) {
            $table->string('id', 16)->primary();
            $table->string('arabic_name', 8)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('algerian-education-system.cycles_table_name') ?? 'cycles');
    }
};
