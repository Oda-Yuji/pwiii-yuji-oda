<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('seasons')->insert([
            [
                'number' => 1,
                'title' => 'Arco 1-3',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'number' => 2,
                'title' => 'Arco 4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'number' => 3,
                'title' => 'Arco 5',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'number' => 4,
                'title' => 'Arco 6',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
