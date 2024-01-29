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
        Schema::table('books', function (Blueprint $table) {
            $table->string("title", 50)->change();
            $table->text("thumb")->change();
            $table->string("price", 8)->change();
            $table->string("series", 50)->change();
            $table->string("type", 30)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string("title")->change();
            $table->string("thumb")->change();
            $table->string("price")->change();
            $table->string("series")->change();
            $table->string("type")->change();
        });
    }
};
