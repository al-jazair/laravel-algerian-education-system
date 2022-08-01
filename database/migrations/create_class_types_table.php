<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(config('algerian-education-system.class_types_table_name') ?? 'class_types', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('previous_class_type_id')->nullable();
            $table->string('name', 48)->unique();
            $table->string('alias', 8)->unique();
            $table->string('arabic_name', 48)->index();
            $table->string('cycle_id', 16);
            $table->unsignedSmallInteger('level');
            $table->unsignedSmallInteger('previous_level')->nullable();

            $table->timestamps();

            $table->foreign('cycle_id')->references('id')->on(config('algerian-education-system.cycles_table_name') ?? 'cycles');
            $table->foreign('previous_class_type_id')->references('id')->on(config('algerian-education-system.class_types_table_name') ?? 'class_types');
            $table->foreign('previous_level')->references('level')->on(config('algerian-education-system.class_types_table_name') ?? 'class_types');
        });
    }
};
