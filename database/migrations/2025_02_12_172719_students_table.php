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
       Schema::create("students", function (Blueprint $table) {
        $table->id();
        $table->string("image");
        $table->string("name");
        $table->string("email");
        $table->string("password");
        $table->integer("contact");
        $table->string("age");
        $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
