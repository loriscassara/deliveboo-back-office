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
        Schema::table('posts', function (Blueprint $table) {
            // $table->unsignedBigInteger("category_id")->nullable()->after("id");
            // $table->foreign("category_id")->references("id")->on("categories")->nullOnDelete();

            $table->foreignId('category_id')->nullable()->after("id")->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_category_id_foreign'); //elimina il vincolo e rende la colonna un normale intero
            $table->dropColumn('category_id'); //elimina la colonna
        });
    }
};
