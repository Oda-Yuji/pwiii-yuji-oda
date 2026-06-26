@extends('master')

@section('content')

@php
    $avgRating = \App\Models\Review::avg('rating');
    $totalEpisodes = \App\Models\Episode::count();

    $posters = [
        ['file' => 'poster-s1-v1', 'label' => 'Temporada 1 - V1'],
        ['file' => 'poster-s1-v2', 'label' => 'Temporada 1 - V2'],
        ['file' => 'poster-s2-v1', 'label' => 'Temporada 2 - V1'],
        ['file' => 'poster-s2-v2', 'label' => 'Temporada 2 - V2'],
        ['file' => 'poster-s3-v1', 'label' => 'Temporada 3 - V1'],
        ['file' => 'poster-s3-v2', 'label' => 'Temporada 3 - V2'],
        ['file' => 'poster-s4-v1', 'label' => 'Temporada 4 - V1'],
        ['file' => 'poster-s4-v2', 'label' => 'Temporada 4 - V2'],
    ];

    $trailers = [
        ['url' => 'https://www.youtube.com/embed/vFfXjuVA1Jk', 'label' => 'Temporada 1 - Trailer 1'],
        ['url' => 'https://www.youtube.com/embed/Slz_rahWp6Y', 'label' => 'Temporada 1 - Trailer 2'],
        ['url' => 'https://www.youtube.com/embed/LjOPj-wdHx4', 'label' => 'Temporada 2 - Trailer 1'],
        ['url' => 'https://www.youtube.com/embed/P_YtFPg9tNE', 'label' => 'Temporada 2 - Trailer 2'],
        ['url' => 'https://www.youtube.com/embed/lXs3yIc_2CU', 'label' => 'Temporada 3 - Trailer 1'],
        ['url' => 'https://www.youtube.com/embed/5hpRO-qRy0Q', 'label' => 'Temporada 3 - Trailer 2'],
        ['url' => 'https://www.youtube.com/embed/7Do1apLKbko', 'label' => 'Temporada 4 - Trailer 1'],
        ['url' => 'https://www.youtube.com/embed/jVl4bY81iIs', 'label' => 'Temporada 4 - Trailer 2'],
    ];

    $cast = [
        ['actor' => 'Yusuke Kobayashi', 'character' => 'Natsuki Subaru', 'avatar' => 'avatar-yusuke-kobayashi', 'description' => 'O protagonista da série.'],
        ['actor' => 'Rie Takahashi', 'character' => 'Emilia', 'avatar' => 'avatar-rie-takahashi', 'description' => 'A heroína principal da série.'],
        ['actor' => 'Inori Minase', 'character' => 'Rem', 'avatar' => 'avatar-inori-minase', 'description' => 'Uma das candidatas reais da série.'],
        ['actor' => 'Takehito Koyasu', 'character' => 'Betelgeuse Romanée-Conti', 'avatar' => 'avatar-takehito-koyasu', 'description' => 'Um dos antagonistas da série.'],
        ['actor' => 'Rie Murakawa', 'character' => 'Ram', 'avatar' => 'avatar-rie-murakawa', 'description' => 'Uma das coadjuvantes principais da série.'],
        ['actor' => 'Satomi Arai', 'character' => 'Beatrice', 'avatar' => 'avatar-satomi-arai', 'description' => 'Uma das coadjuvantes principais da série.'],
        ['actor' => 'Yumi Uchiyama', 'character' => 'Echidna', 'avatar' => 'avatar-yumi-uchiyama', 'description' => 'Uma das personagens mais misteriosas da série.'],
        ['actor' => 'Shimba Tsuchiya', 'character' => 'Garfiel Tinsel', 'avatar' => 'avatar-shimba-tsuchiya', 'description' => 'Um dos coadjuvantes principais da série.'],
        ['actor' => 'Chinatsu Akasaki', 'character' => 'Frederica Baumann', 'avatar' => 'avatar-chinatsu-akasaki', 'description' => 'Uma das coadjuvantes principais da série.'],
        ['actor' => 'Akira Ishida', 'character' => 'Roswaal L. Mathers', 'avatar' => 'avatar-akira-ishida', 'description' => 'Um dos coadjuvantes principais da série.'],
        ['actor' => 'Yoshitsugu Matsuoka', 'character' => 'Julius Juukulius', 'avatar' => 'avatar-yoshitsugu-matsuoka', 'description' => 'Um dos coadjuvantes principais da série.'],
        ['actor' => 'Sora Amamiya', 'character' => 'Priscilla Barielle', 'avatar' => 'avatar-sora-amamiya', 'description' => 'Uma das candidatas reais da série.'],
        ['actor' => 'Yoko Hikasa', 'character' => 'Crusch Karsten', 'avatar' => 'avatar-yoko-hikasa', 'description' => 'Uma das candidatas reais da série.'],
        ['actor' => 'Mamoru Miyano', 'character' => 'Reinhard van Astrea', 'avatar' => 'avatar-mamoru-miyano', 'description' => 'Um dos coadjuvantes principais da série.'],
        ['actor' => 'Reina Ueda', 'character' => 'Anastasia Hoshin', 'avatar' => 'avatar-reina-ueda', 'description' => 'Uma das candidatas reais da série.'],
        ['actor' => 'Kengo Kawanishi', 'character' => 'Otto Suwen', 'avatar' => 'avatar-kengo-kawanishi', 'description' => 'Um dos coadjuvantes principais da série.'],
        ['actor' => 'Mugihito', 'character' => 'Shaula', 'avatar' => 'avatar-mugihito', 'description' => 'Uma das coadjuvantes principais da série.'],
        ['actor' => 'Aoi Yuki', 'character' => 'Felt', 'avatar' => 'avatar-aoi-yuki', 'description' => 'Uma das candidatas reais da série.'],
    ];
@endphp

{{-- HERO --}}
<div class="w-full h-[50vh] overflow-hidden relative">
    <img src="{{ asset('images/hero1.jpg') }}" alt="Re:ZERO Hero" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#181624]"></div>
</div>

{{-- TÍTULO --}}
<div class="px-12 mt-6">
    <h1 class="text-5xl font-bold tracking-tight">Re:ZERO −Starting Life in Another World−</h1>
</div>

{{-- INFORMAÇÕES + POSTER / NOTA + SINOPSE --}}
<div class="px-12 mt-8 flex gap-10">

    {{-- Coluna esquerda: poster + informações --}}
    <div class="w-64 shrink-0">
        {{-- Poster clicável --}}
        <img
            src="{{ asset('images/poster-s4-v1.jpg') }}"
            alt="Poster T4"
            class="w-full rounded-lg cursor-pointer hover:opacity-80 transition"
            onclick="openModal(6)">
    </div>

    {{-- Coluna direita: nota + sinopse --}}
    <div class="flex-1">
        {{-- Informações --}}
        <div class="flex flex-wrap mt-4 text-sm text-gray-300 gap-x-12">
            <div><span class="text-gray-500 uppercase text-xs tracking-wider">Estúdio</span><p class="font-semibold text-white">White Fox</p></div>
            <div><span class="text-gray-500 uppercase text-xs tracking-wider">Faixa Etária</span><p class="font-semibold text-white">16+</p></div>
            <div><span class="text-gray-500 uppercase text-xs tracking-wider">Data de Lançamento</span><p class="font-semibold text-white">4 de abril de 2016</p></div>
            <div><span class="text-gray-500 uppercase text-xs tracking-wider">Episódios</span><p class="font-semibold text-white">{{ $totalEpisodes }}</p></div>
        </div>

        {{-- Nota média --}}
        <div class="flex items-center gap-12 my-6">
            <div class="flex items-center gap-2">
                <svg class="size-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.602-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.538 1.118l-3.368-2.447a1 1 0 00-1.176 0l-3.368 2.447c-.783.57-1.838-.197-1.538-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.285-3.957z"/>
                </svg>
                <span class="text-4xl font-bold text-white">{{ $avgRating ? number_format($avgRating, 1) : 'N/A' }}</span>
                <span class="text-gray-400 text-lg">/10</span>
            </div>
            <a href="{{ route('episodes.index') }}" class="flex items-center gap-2 p-2 rounded-lg text-accent hover:bg-white/8 font-semibold text-4xl transition">
                <svg class="size-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.499z"/>
                </svg>
                Avaliar
            </a>
        </div>

        {{-- Sinopse --}}
        <h2 class="text-lg font-bold mb-2 text-gray-200">Sinopse</h2>
        <p class="text-gray-400 leading-relaxed">
            Natsuki Subaru, um jovem sem nenhuma habilidade especial, é misteriosamente transportado para um mundo de fantasia ao sair de uma conveniência. Sem dinheiro, poder ou aliados, ele é salvo por uma jovem elfa de cabelos prateados chamada Emilia. Para retribuir o favor, ele decide ajudá-la a recuperar um item roubado. Porém, ao chegar ao covil de um ladrão, ambos acabam sendo brutalmente assassinados. Subaru então acorda no mesmo local onde havia chegado, e percebe que possui o poder de "Retornar pela Morte" — revivendo toda vez que morre, mas sem poder revelar isso a ninguém.
        </p>
    </div>
</div>

{{-- TRAILERS --}}
<div class="relative mx-12 mt-12">
    <div class="overflow-hidden">
        <div id="trailer-track" class="flex gap-4 transition-transform duration-500">
            @foreach ($trailers as $trailer)
                <div class="shrink-0 w-[calc(33.333%-11px)]">
                    <p class="text-base text-gray-400 mb-2 font-semibold">{{ $trailer['label'] }}</p>
                    <div class="aspect-video rounded-lg overflow-hidden">
                        <iframe
                            src="{{ $trailer['url'] }}"
                            class="w-full h-full"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <button onclick="prevTrailer()" class="absolute left-0 top-1/2 -translate-y-1/3 hover:text-accent size-10 rounded-full flex items-center justify-center transition z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-24 ipc-icon ipc-icon--arrow-left ipc-icon--inline ipc-link__icon pr-1" viewBox="0 0 24 24" fill="currentColor" role="presentation">
            <path d="M18.378 23.369c.398-.402.622-.947.622-1.516 0-.568-.224-1.113-.622-1.515l-8.249-8.34 8.25-8.34a2.16 2.16 0 0 0 .548-2.07A2.132 2.132 0 0 0 17.428.073a2.104 2.104 0 0 0-2.048.555l-9.758 9.866A2.153 2.153 0 0 0 5 12.009c0 .568.224 1.114.622 1.515l9.758 9.866c.808.817 2.17.817 2.998-.021z"></path>
        </svg>
    </button>
    <button onclick="nextTrailer()" class="absolute right-0 top-1/2 -translate-y-1/3 hover:text-accent size-10 rounded-full flex items-center justify-center transition z-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-24 ipc-icon ipc-icon--arrow-right ipc-icon--inline ipc-link__icon pl-1" viewBox="0 0 24 24" fill="currentColor" role="presentation">
            <path d="M5.622.631A2.153 2.153 0 0 0 5 2.147c0 .568.224 1.113.622 1.515l8.249 8.34-8.25 8.34a2.16 2.16 0 0 0-.548 2.07c.196.74.768 1.317 1.499 1.515a2.104 2.104 0 0 0 2.048-.555l9.758-9.866a2.153 2.153 0 0 0 0-3.03L8.62.61C7.812-.207 6.45-.207 5.622.63z"></path>
        </svg>
    </button>
</div>

{{-- ELENCO --}}
<div class="px-12 mt-12 mb-12">
    <h2 class="text-2xl font-bold mb-6 border-b border-accent pb-2">Elenco</h2>

    <div class="grid grid-cols-2 gap-4">
        @foreach ($cast as $member)
            <div class="flex items-center gap-4 py-3">
                <img
                    src="{{ asset('images/' . $member['avatar'] . '.jpg') }}"
                    alt="{{ $member['actor'] }}"
                    class="size-24 rounded-full object-cover shrink-0 bg-zinc-700"
                    onerror="this.style.display='none'">
                <div>
                    <p class="font-semibold text-white text-lg">{{ $member['actor'] }}</p>
                    <p class="text-gray-400 text-base">{{ $member['character'] }}</p>
                    <p class="text-accent text-base">{{ $member['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- MODAL DE POSTERS --}}
<div id="poster-modal" class="fixed inset-0 bg-black/80 z-50 hidden flex items-center justify-center">
    <div class="relative max-w-2xl w-full px-12">
        <button onclick="closeModal()" class="absolute top-0 right-4 text-white text-3xl hover:text-accent">✕</button>

        <div class="relative">
            @foreach ($posters as $i => $poster)
                <img
                    src="{{ asset('images/' . $poster['file'] . '.jpg') }}"
                    alt="{{ $poster['label'] }}"
                    id="poster-{{ $i }}"
                    class="poster-slide hidden w-full max-h-[80vh] object-contain rounded-lg">
            @endforeach
        </div>

        <div class="flex justify-between mt-4">
            <button onclick="prevPoster()" class="flex flex-wrap justify-between items-center bg-zinc-800 hover:bg-accent text-white px-4 py-2 rounded transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 ipc-icon ipc-icon--arrow-left ipc-icon--inline ipc-link__icon pr-2" viewBox="0 0 24 24" fill="currentColor" role="presentation">
                    <path d="M18.378 23.369c.398-.402.622-.947.622-1.516 0-.568-.224-1.113-.622-1.515l-8.249-8.34 8.25-8.34a2.16 2.16 0 0 0 .548-2.07A2.132 2.132 0 0 0 17.428.073a2.104 2.104 0 0 0-2.048.555l-9.758 9.866A2.153 2.153 0 0 0 5 12.009c0 .568.224 1.114.622 1.515l9.758 9.866c.808.817 2.17.817 2.998-.021z"></path>
                </svg>Anterior
            </button>

            <span id="poster-label" class="text-gray-400 text-sm self-center"></span>

            <button onclick="nextPoster()" class="flex flex-wrap justify-between items-center bg-zinc-800 hover:bg-accent text-white px-4 py-2 rounded transition">Próximo
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 ipc-icon ipc-icon--arrow-right ipc-icon--inline ipc-link__icon pl-2" viewBox="0 0 24 24" fill="currentColor" role="presentation">
                    <path d="M5.622.631A2.153 2.153 0 0 0 5 2.147c0 .568.224 1.113.622 1.515l8.249 8.34-8.25 8.34a2.16 2.16 0 0 0-.548 2.07c.196.74.768 1.317 1.499 1.515a2.104 2.104 0 0 0 2.048-.555l9.758-9.866a2.153 2.153 0 0 0 0-3.03L8.62.61C7.812-.207 6.45-.207 5.622.63z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    // --- POSTERS ---
    const posters = @json($posters);
    let currentPoster = 0;

    function openModal(startIndex) {
        currentPoster = startIndex;
        document.getElementById('poster-modal').classList.remove('hidden');
        showPoster(currentPoster);
    }

    function closeModal() {
        document.getElementById('poster-modal').classList.add('hidden');
    }

    function showPoster(index) {
        document.querySelectorAll('.poster-slide').forEach(el => el.classList.add('hidden'));
        document.getElementById('poster-' + index).classList.remove('hidden');
        document.getElementById('poster-label').textContent = posters[index].label;
    }

    function prevPoster() {
        currentPoster = (currentPoster - 1 + posters.length) % posters.length;
        showPoster(currentPoster);
    }

    function nextPoster() {
        currentPoster = (currentPoster + 1) % posters.length;
        showPoster(currentPoster);
    }

    // Fecha modal ao clicar fora
    document.getElementById('poster-modal').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });

    // --- TRAILERS ---
    const totalTrailers = {{ count($trailers) }};
    const visibleTrailers = 3;
    let trailerIndex = 0;

    function updateTrailer() {
        const track = document.getElementById('trailer-track');
        const itemWidth = track.children[0].offsetWidth + 16;
        track.style.transform = `translateX(-${trailerIndex * itemWidth}px)`;
    }

    function nextTrailer() {
        trailerIndex = (trailerIndex + 1) % (totalTrailers - visibleTrailers + 1);
        updateTrailer();
    }

    function prevTrailer() {
        trailerIndex = (trailerIndex - 1 + (totalTrailers - visibleTrailers + 1)) % (totalTrailers - visibleTrailers + 1);
        updateTrailer();
    }
</script>

@endsection