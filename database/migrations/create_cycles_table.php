<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(config('algerian-education-system.cycles_table_name') ?? 'cycles', function (Blueprint $table) {
            $table->string('id', 16)->primary();
            $table->string('arabic_name', 8)->unique();
        });
    }
};
