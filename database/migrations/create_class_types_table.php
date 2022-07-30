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

            $table->string('name', 50)->index();
            $table->string('cycle_id', 20);
            $table->unsignedSmallInteger('level');
            $table->string('alias', 10);

            $table->timestamps();
        });
    }
};
