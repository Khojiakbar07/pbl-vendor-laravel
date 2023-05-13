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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('fullname');
            $table->date('birthday');
            $table->integer('age')->nullable();
            $table->string('phone');
            $table->string("address")->nullable();
            $table->timestamps();
        });
    }


    /**
        Schema::dropIfExists('customers');
    }
     *
     *
    }:
