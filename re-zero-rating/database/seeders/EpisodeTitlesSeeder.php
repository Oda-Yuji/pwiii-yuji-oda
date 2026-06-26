<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Episode;

class EpisodeTitlesSeeder extends Seeder
{
    public function run(): void
    {
        $episodes = [
            [4, 1, 'Kimi o Tsuredasu Riyû / Gorgeous Tiger Reloaded', 'Subaru parte para a Torre de Vigia das Plêiades na esperança de salvar seus amigos e o povo de Priestella.'],
            [4, 2, 'Suna Jikan o Koero', 'Subaru e seu grupo enfrentam dificuldades em cruzar as Dunas de Auguria a caminho da Torre de Vigia das Plêiades.'],
            [4, 3, 'Kanshi-tô no Bannin', 'O grupo se separa pouco antes de chegar à Torre de Vigia das Plêiades. Subaru acorda no subsolo.'],
            [4, 4, 'Shiroi Hoshizora no Asterism', 'Subaru e seu grupo chegam à Torre de Vigia das Plêiades depois que o Sábio os encontra.'],
            [4, 5, 'Bôfuri', 'Depois de superar a primeira tentativa, Subaru e companhia se concentram mais na Catalaia.'],
            [4, 6, 'Julius Juukulius', 'Subaru e sua equipe tentam passar pelo segundo andar da torre, mas seu examinador representa um desafio difícil.'],
            [4, 7, 'Konbini o Deru to, Soko wa Fushigi no Sekai Deshita', 'Julius ouve Anastasia e Subaru falando sobre a condição atual de Anastasia.'],
            [4, 8, 'Omae wa Dare da', 'Subaru e sua equipe se aventuram pelas dunas de Auguria em busca de um "sábio" para ajudar a resgatar seus amigos.'],
            [4, 9, 'Zangai', 'Subaru acaba perdido no subsolo após tentar fugir da torre, e encontra uma cena terrível ao voltar.'],
            [4, 10, 'Satsujin wa Kuse ni Naru', 'Logo após Subaru descobrir o cadáver de Meili, Beatrice encontra um livro com o nome de Meili no arquivo.'],
            [4, 11, 'Re:Zero kara Hajimaru Isekai Seikatsu', 'Subaru e sua equipe se aventuram nas Dunas de Auguria em busca de um homem sábio que possa ajudar a resgatar seus amigos.']
        ];

        foreach ($episodes as [$seasonId, $number, $title, $synopsis]) {
            Episode::where('season_id', $seasonId)
                ->where('number', $number)
                ->update(['title' => $title, 'synopsis' => $synopsis]);
        }
    }
}
