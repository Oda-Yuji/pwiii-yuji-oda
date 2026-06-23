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
            $table->integer('season');
            $table->integer('number');
            $table->string('title');
            $table->string('synopsis');
            $table->timestamps();
        });

        DB::table('episodes')->insert([
            [ 
                'season' => '4',
                'number' => '1',
                'title' => 'Kimi o Tsuredasu Riyû / Gorgeous Tiger Reloaded',
                'synopsis' => 'Subaru parte para a Torre de Vigia das Plêiades na esperança de salvar seus amigos e o povo de Priestella.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '2',
                'title' => 'Suna Jikan o Koero',
                'synopsis' => 'Subaru e seu grupo enfrentam dificuldades em cruzar as Dunas de Auguria a caminho da Torre de Vigia das Plêiades.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '3',
                'title' => 'Kanshi-tô no Bannin',
                'synopsis' => 'O grupo se separa pouco antes de chegar à Torre de Vigia das Plêiades. Subaru acorda no subsolo.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '4',
                'title' => 'Shiroi Hoshizora no Asterism',
                'synopsis' => 'Subaru e seu grupo chegam à Torre de Vigia das Plêiades depois que o Sábio os encontra.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '5',
                'title' => 'Bôfuri',
                'synopsis' => 'Depois de superar a primeira tentativa, Subaru e companhia se concentram mais na Catalaia.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '6',
                'title' => 'Julius Juukulius',
                'synopsis' => 'Subaru e sua equipe tentam passar pelo segundo andar da torre, mas seu examinador representa um desafio difícil.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '7',
                'title' => 'Konbini o Deru to, Soko wa Fushigi no Sekai Deshita',
                'synopsis' => 'Julius ouve Anastasia e Subaru falando sobre a condição atual de Anastasia.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '8',
                'title' => 'Omae wa Dare da',
                'synopsis' => 'Subaru e sua equipe se aventuram pelas dunas de Auguria em busca de um "sábio" para ajudar a resgatar seus amigos.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '9',
                'title' => 'Zangai',
                'synopsis' => 'Subaru acaba perdido no subsolo após tentar fugir da torre, e encontra uma cena terrível ao voltar.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '10',
                'title' => 'Satsujin wa Kuse ni Naru',
                'synopsis' => 'Logo após Subaru descobrir o cadáver de Meili, Beatrice encontra um livro com o nome de Meili no arquivo.',
                'created_at' => now(),
                'updated_at' => now()],
            [
                'season' => '4',
                'number' => '11',
                'title' => 'Re:Zero kara Hajimaru Isekai Seikatsu',
                'synopsis' => 'Subaru e sua equipe se aventuram nas Dunas de Auguria em busca de um homem sábio que possa ajudar a resgatar seus amigos.',
                'created_at' => now(),
                'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
