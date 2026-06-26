<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->integer('season_id')->nullable()->constrained()->cascadeOnDelete();
            $table->integer('number');
            $table->string('title');
            $table->string('synopsis');
            $table->unique(['season_id', 'number']);
            $table->timestamps();
        });

        DB::table('episodes')->insert([
            // Season 1
            ...array_map(fn($n) => [
                'season_id' => 1,
                'number' => $n,
                'title' => '',
                'synopsis' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ], range(1, 25)),

            // Season 2 
            ...array_map(fn($n) => [
                'season_id' => 2,
                'number' => $n,
                'title' => '',
                'synopsis' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ], range(1, 25)),

            // Season 3 
            ...array_map(fn($n) => [
                'season_id' => 3,
                'number' => $n,
                'title' => '',
                'synopsis' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ], range(1, 16)),

            // Season 4
            ...array_map(fn($n) => [
                'season_id' => 4,
                'number' => $n,
                'title' => '',
                'synopsis' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ], range(1, 19)),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
