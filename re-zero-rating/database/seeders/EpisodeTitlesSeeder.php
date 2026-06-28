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
            // Season 1
            [1, 1, 'Hajimari no Owari to Owari no Hajimari', 'Um jovem é convocado para uma realidade diferente. Ele começa uma busca por quem fez isso e o porquê.'],
            [1, 2, 'Saikai no Majo', 'Subaru descobre que sua habilidade mágica especial é bastante problemática.'],
            [1, 3, 'Zero kara Hajimaru Isekai Seikatsu', 'Subaru tenta comprar o emblema de Felt e devolvê-lo a Satella antes que Elsa chegue à casa de saque, mas Satella chega antes que as negociações sejam concluídas, e Elsa ainda os ataca.'],
            [1, 4, 'Roswaal-tei no Danran', 'Após ser gravemente ferido por Elsa, Subaru de alguma forma sobreviveu e acordou na mansão de Margrave Mathers, no Reino de Lugunica.'],
            [1, 5, 'Yakusoku Shita Asa wa Tooku', 'Subaru está histérico após misteriosamente Retornar pela Morte no meio da noite. Tudo o que havia conquistado até então, incluindo seu encontro com Emilia, desapareceu completamente.'],
            [1, 6, 'Kusari no Oto', 'O primeiro dia de Subaru na Mansão Roswaal começa pela terceira vez. Primeiro, ele morreu de fraqueza e, na segunda vez, foi assassinado por alguém. Subaru decide descobrir a identidade do assassino.'],
            [1, 7, 'Natsuki Subaru no Restart', 'A identidade do assassino é revelada de forma chocante a Subaru. Ele pode sentir tudo desmoronando ao seu redor enquanto morre novamente. Porém, a quarta noite passa sem incidentes e Subaru tem uma revelação surpreendente.'],
            [1, 8, 'Naite Nakiwameite Nakiyanda kara', 'O primeiro dia de Subaru na mansão de Roswaal começa pela quinta vez. Determinado a salvar todos desta vez, ele faz questão de manter seu melhor sorriso para conquistar a confiança dos funcionários da mansão.'],
            [1, 9, 'Yuuki no Imi', 'À medida que as peças se encaixam, Subaru percebe que o xamã está na vila. Ele vai até lá com Ram e Rem para tentar descobrir a identidade do xamã. Uma revelação perturbadora lança Subaru em frenesi.'],
            [1, 10, 'Oni Gakatta Yarikata', 'Após arriscar sua vida para salvar as crianças da vila, Subaru foi tão poderosa­mente amaldiçoado que a única chance de sobrevivência era o extermínio completo do Ulgarm. Subaru está prestes a desistir quando percebe que Rem desapareceu.'],
            [1, 11, 'Rem', 'Inconsciente após o ataque de Subaru, Rem sonha com um evento de seu passado que ela e Ram prefeririam esquecer. Ao acordar, ela diz a Subaru que acabou de cometer o mesmo pecado novamente.'],
            [1, 12, 'Sairai no Outo', 'Por ordem do conselho de anciãos, Wilhelm e Felix visitam a mansão de Roswaal como emissários. Emilia e Subaru rumam para a capital imperial.'],
            [1, 13, 'Jishou Kishi Natsuki Subaru', 'De acordo com uma nova profecia vista na Pedra do Dragão, existem cinco sacerdotisas com potencial para ser a próxima governante do reino.'],
            [1, 14, 'Zetsubou to lu Yamai', 'Rejeitado por aquela que significava mais para ele do que qualquer coisa, Subaru ainda é incapaz de reconhecer que pode ter feito algo irreversível. Ele então descobre que um movimento perturbador foi detectado no domínio de Roswaal.'],
            [1, 15, 'Kyouki no Sotogawa', 'Subaru olha horrorizado para o corpo mutilado de Rem. Todos na mansão foram massacrados. Uma voz ressentida chama Subaru enquanto sua mente e corpo desmoronam violentamente entre os corpos das pessoas que ele ama.'],
            [1, 16, 'Buta no Yokubou', 'Subaru e Rem buscam ajuda para salvar Emilia e todos os que residem no domínio de Roswaal.'],
            [1, 17, 'Shuutai no Hate ni', 'Uma besta paira sobre Subaru e seus companheiros de viagem. Entre a névoa densa e os gritos estridentes da figura massiva, Rem decide fazer o sacrifício definitivo pela pessoa que ela mais ama neste mundo.'],
            [1, 18, 'Zero kara', 'Subaru falhou em proteger todos na vila após o culto da bruxa matar todos, e então ele retornou pela morte. Subaru tenta fugir do domínio com Rem depois de desistir de tudo, até que Rem começa a falar com ele.'],
            [1, 19, 'Hakugei Kouryakusen', 'Para salvar Emilia, Subaru se aproxima de Crusch para negociar a formação de uma aliança. Suas condições são difíceis de acreditar para Crusch, mas ela pode ver que Subaru não está mentindo.'],
            [1, 20, 'Wilhelm van Astrea', 'A batalha contra a baleia branca começa.'],
            [1, 21, 'Zetsubou ni Aragau Kake', 'Subaru e Rem ficam sem palavras diante da cena que se desenrola. Bem quando parecia que estavam prestes a encurralar a Baleia Branca, a batalha toma um rumo que ninguém esperava.'],
            [1, 22, 'Taida Issen', 'O exército mercenário que estava bloqueando a estrada durante a subjugação da Baleia Branca retorna para se juntar à força principal. Sob a liderança de Subaru, a força mercenária converge sobre o domínio de Mathers para destruir o culto da bruxa.'],
            [1, 23, 'Akuratsunaru Taida', 'Subaru e seus companheiros se dirigem à mansão de Roswaal para evacuar Emilia e todos os demais, parando na vila vizinha no caminho para evacuar seus moradores também. Porém, a situação toma um rumo que ninguém esperava.'],
            [1, 24, 'Jijou Kishi to Saiyuu no Kishi', 'Emilia tentou alertar os residentes da vila Arlam que o perigo estava chegando e que deveriam evacuar, mas não foi bem recebida. Enquanto pondera o que mais pode fazer, Wilhelm chega à mansão com uma mensagem.'],
            [1, 25, 'Tada Sore dake no Monogatari', 'Subaru e Julius lutam contra Betelgeuse utilizando artes espirituais para permitir que Julius veja pelos olhos de Subaru. Desta vez, porém, Subaru profere seu "Retorno pela Morte" para fazer Betelgeuse entrar em contato com o espírito de Satella.'],

            // Season 2
            [2, 1, 'Sorezore no Chikai', 'Subaru e os outros celebram sua vitória sobre a Baleia Branca. Porém, de repente, toda a existência de Rem é apagada novamente, levando um Subaru abatido a descobrir o que aconteceu.'],
            [2, 2, 'Tsuginaru Basho', 'Subaru e Emilia retornam para casa, apenas para descobrir que a vila está vazia e Roswaal desapareceu. Para encontrar seus amigos e salvar Rem, os dois partem para o misterioso Santuário.'],
            [2, 3, 'Machikaneta Saikai', 'Subaru se vê frente a frente com Echidna, a Bruxa da Ganância, e descobre o que aconteceu com os outros moradores da vila.'],
            [2, 4, 'Oyako', 'Subaru reencontra seus pais durante o desafio oferecido pela bruxa da ganância. O que começar uma nova vida em um isekai verdadeiramente significa.'],
            [2, 5, 'Fumidashita Ippo', 'Emilia continua tentando os desafios do Santuário. Enquanto isso, Subaru enfrenta um misterioso encontro com Roswaal.'],
            [2, 6, 'Shoujo no Fukuin', 'Subaru tenta fazer tudo de forma diferente desta vez para não ter que lidar com os mesmos resultados aterrorizantes. Seus planos vão funcionar desta vez?'],
            [2, 7, 'Yuujin', 'Subaru descobre algo que nunca soube em sua vida anterior. Ele enfrenta eventos imprevisíveis durante o terceiro reinício.'],
            [2, 8, 'Inochi no Kachi', 'Subaru tenta escapar do Santuário com a ajuda de Otto e Ram, e aprende mais sobre Beatrice.'],
            [2, 9, 'Love Love Love Love Love Love You', 'Echidna começa a contar a Subaru sobre a bruxa que lhe deu o poder e o colocou nesse caminho agonizante.'],
            [2, 10, 'Jigoku Nara Shitte Iru', 'Subaru assume a responsabilidade de suportar todas as dores sozinho para que ninguém precise se machucar.'],
            [2, 11, 'Shi no Aji', 'A situação fica cada vez mais complicada enquanto Subaru continua enfrentando novas situações aterrorizantes. Ele conseguirá sair dessas situações inteiro?'],
            [2, 12, 'Majo-tachi no Chakai', 'Subaru entende algo sobre sua habilidade "Retorno pela Morte" que nunca havia considerado. Ele é convidado para outra festa do chá com Echidna, onde descobre coisas importantes sobre ela.'],
            [2, 13, 'Nakitaku Naru Oto', 'Subaru enfrenta as Sete Bruxas e sua Autoridade. Ele começa a perceber que algo que nunca considerou é possível.'],
            [2, 14, 'Straight Bet', 'Com todas as probabilidades contra ele, Subaru faz uma aposta arriscada.'],
            [2, 15, 'Otto Suwen/Shinjiru Riyû', 'Encarregado de segurar Garfiel, Otto usa tudo ao seu alcance. Enquanto isso, Emilia e Subaru tem uma conversa.'],
            [2, 16, 'Quain no Ishi wa Hitori ja Agaranai', 'Enfurecido e nublado pelo trauma de seu passado, Garfiel vai destruir a entrada do Santuário, mas Subaru e Emilia entram em seu caminho.'],
            [2, 17, 'Kioku no Tabiji', 'Emilia e Echidna caminham pela floresta onde uma Emilia mais jovem viveu para reconstituir os fragmentos de seu passado esquecido.'],
            [2, 18, 'Heikeboshi no Waratta Hi', 'Com o aparecimento súbito e inesperado de Regulus, a segurança do selo está em questão. Fortuna e Geuse lutam contra a ameaça que se aproxima. Enquanto isso, fora do julgamento, Subaru e companhia recebem uma revelação chocante.'],
            [2, 19, 'Elior Daishinrin no Eikyû Tôdo', 'Ao chegar ao selo, Emilia se surpreende ao ver Pandora já a esperando. Pandora oferece a Emilia a salvação da floresta, mas o custo é quebrar sua promessa com a Mãe Fortuna.'],
            [2, 20, 'Seiiki no Hajimari to, Houkai no Hajimari', 'Subaru, agora munido do conhecimento dos eventos que levaram à criação do Santuário e do apoio de seus aliados, enfrenta Roswaal mais uma vez enquanto o passado do Santuário é revelado.'],
            [2, 21, 'Hôkô no Saikai', 'Após enfrentar Roswaal, Subaru se dirige à mansão de Roswaal junto de Garfiel e Otto. Enquanto isso, Ram tem uma longa conversa com Emilia e pede um favor a ela.'],
            [2, 22, 'Suimen ni Utsuru Shiawase', 'Garfiel enfrenta Elsa, Ram e Puck enfrentam Roswaal, Subaru confronta Beatrice e Emilia enfrenta seu segundo desafio. Cada um tem seu próprio dever a cumprir.'],
            [2, 23, 'Chi to Zôbutsu made Aishite', 'Garfiel e Frederica continuam a luta contra Elsa e Meili enquanto Subaru, Otto e Petra tentam derrubar o Guiltylowe; enquanto isso, Ram e Puck lutam contra Roswaal e Emilia enfrenta o terceiro desafio.'],
            [2, 24, 'Ore o Erabe', 'Em meio a uma tempestade de neve repentina, Emilia se reúne com os aldeões. Enquanto isso, na mansão em chamas, Subaru continua procurando por Beatrice.'],
            [2, 25, 'Gekka, Detarame na Step', 'A batalha final do Santuário chega ao clímax enquanto Emilia, Subaru e Beatrice tentam aniquilar o Grande Coelho de uma vez por todas.'],

            // Season 3
            [3, 1, 'Gekijou-gata Akui', 'Um estudante japonês do ensino médio é subitamente transportado para um mundo de fantasia quando volta da loja de conveniência para casa.'],
            [3, 2, 'Hyôen no Ketsumatsu', 'Sirius Romanee-Conti, arcebispo do Culto às Bruxas, representando "Ira", mata Subaru. Subaru tenta impedir os atos assassinos de Sirius, mas é pego em suspeita e atacado pelas correntes de Sirius.'],
            [3, 3, 'Gorgeous Tiger', 'Depois de um incidente caótico, Priestella entra em tumulto quando Emilia é sequestrada. Subaru e seus companheiros embarcam em uma missão para salvá-la e restaurar a ordem.'],
            [3, 4, 'Toshi Chôsha Dakkan Sakusen', 'Subaru e seus companheiros se encontram em uma situação desesperadora depois que os arcebispos de Sin tomaram a cidade. Agora, eles estão elaborando um plano para, em primeiro lugar, recuperar o conselho da cidade.'],
            [3, 5, 'Dakuryû', 'O ataque à prefeitura entra em sua segunda fase. Subaru e Crusch invadem o interior, mas lá os espera Capella, que tem alguns truques escondidos na manga.'],
            [3, 6, 'Kishi no Jôken', 'Depois de um resultado desastroso contra as Bruxas, Subaru acorda e encontra Priestella devastada pela enchente, com abrigos de evacuação em uma tempestade de emoções. Emilia continua presa nos planos de Regulus.'],
            [3, 7, 'Mottomo Atarashii Eiyuu to Mottomo Furui Eiyuu', 'Emilia transmite dados cruciais sobre os arcebispos de Sin por meio de um espelho mágico. Pede para proteger Beatrice. Al informa a Subaru e o grupo planeja recuperar as torres de controle.'],
            [3, 8, 'Itsuka Suki ni Naru Hito', 'Subaru e os outros realizam uma reunião na prefeitura para desenvolver uma estratégia contra os quatro arcebispos do pecado. No entanto, o tempo de Emilia está se esgotando pouco a pouco.'],
            [3, 9, 'Konsen Toshi', 'O contra-ataque contra o Culto das Bruxas está em andamento. Os guerreiros enfrentam rivais poderosos enquanto buscam liquidar contas pendentes. Com tudo contra eles, a cidade e seus habitantes estão em jogo.'],
            [3, 10, 'Gôyoku Kôryaku-sen', 'Subaru está pensando profundamente sobre o funcionamento da Autoridade de Regulus.'],
            [3, 11, 'Liliana Masquerade', 'Em uma batalha decisiva contra o Arcebispo da Ira, Liliana oferece sua melhor atuação para ajudar Priscilla.'],
            [3, 12, 'Regulus Corneas', 'Emilia busca a ajuda das esposas de Regulus para destronar o pequeno rei de uma vez por todas.'],
            [3, 13, 'Senshi no Shôsan', 'Capella usa a admiração de Al por Priscilla contra ele, e Garfiel luta contra o lendário "Oito Armas" Kurgan.'],
            [3, 14, 'Theresia van Astrea', 'Wilhelm se encontra cara a cara com sua amada esposa, que morreu anos atrás.'],
            [3, 15, 'Shûaku Naru Bansankai', 'Enquanto luta contra Lye Batenkaitos, Otto descobre o segredo do poder do Arcebispo do Pecado.'],
            [3, 16, 'Priestella Kôbô-sen Result', 'Otto e Beatrice lutam contra Gula, o último dos Arcebispos do Pecado que aterroriza Priestella.'],

            // Season 4 
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
            [4, 11, 'Re:Zero kara Hajimaru Isekai Seikatsu', 'Subaru e sua equipe se aventuram nas Dunas de Auguria em busca de um homem sábio que possa ajudar a resgatar seus amigos.'],
        ];

        foreach ($episodes as [$seasonId, $number, $title, $synopsis]) {
            Episode::where('season_id', $seasonId)
                ->where('number', $number)
                ->update(['title' => $title, 'synopsis' => $synopsis]);
        }
    }
}
