<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('class_types', function (Blueprint $table) {
            $table->id();

            $table->string('cycle_id', 20);
            $table->string('name', 50)->index();
            $table->string('alias', 10)->index();
            $table->unsignedSmallInteger('level');
            $table->unsignedBigInteger('ex_class_type_id')->nullable();

            $table->timestamps();

            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->foreign('ex_class_type_id')->references('id')->on('class_types');
        });
    }
};
