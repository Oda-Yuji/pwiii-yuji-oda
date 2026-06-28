@extends('master')

@section('content')
<div class="flex min-h-screen px-8 pt-6 gap-6">

    {{-- Barra lateral de temporadas --}}
    <aside class="w-48 shrink-0">
        <h2 class="text-lg font-bold uppercase tracking-widest text-gray-400 mb-3">Temporadas</h2>
        <nav class="flex flex-col gap-1">
            @foreach ($seasons as $season)
                <button
                    onclick="showSeason({{ $season->id }})"
                    id="btn-season-{{ $season->id }}"
                    class="text-left px-4 py-2 rounded text-base font-semibold text-gray-300 hover:bg-accent hover:text-white transition season-btn">
                    T{{ $season->number }} — {{ $season->title }}
                </button>
            @endforeach
        </nav>
    </aside>

    {{-- Conteúdo dos episódios --}}
    <div class="flex-1">
        @foreach ($seasons as $season)
            <div id="season-{{ $season->id }}" class="season-panel hidden">
                <h2 class="text-2xl font-bold mb-6 border-b border-accent pb-2">
                    Temporada {{ $season->number }} — {{ $season->title }}
                </h2>

                <div class="flex flex-col gap-4">
                    @foreach ($season->episodes->sortBy('number') as $episode)
                        <div class="flex h-50 bg-zinc-800 rounded-lg border border-gray-700 overflow-hidden hover:border-accent transition">
                            {{-- Imagem --}}
                            <img
                                src="{{ asset('images/episodes-preview/s' . $season->number . '-ep' . $episode->number . '.jpg') }}"
                                alt="S{{ $season->number }}E{{ $episode->number }}"
                                class="w-80 max-w-80 h-full object-cover shrink-0 bg-zinc-700 mr-4"
                                onerror="this.src='{{ asset('images/episodes-preview/placeholder.jpeg') }}'">

                            {{-- Info --}}
                            <div class="flex flex-col justify-between p-3 flex-1">
                                <div>
                                    <h3 class="font-bold text-lg justify-self-start">
                                        T{{ $season->number }}.E{{ $episode->number }}
                                        @if($episode->title) · {{ $episode->title }} @endif
                                    </h3>

                                    <p class="text-gray-200 text-base mt-2 justify-self-start">
                                        @if($episode->synopsis) 
                                            {{ $episode->synopsis }} 
                                        @else 
                                            <span class="text-gray-400">Sem sinopse disponível.</span> 
                                        @endif
                                    </p>
                                </div>

                                <div class="flex items-center justify-between mt-2">
                                    <span class="flex items-center gap-1 text-yellow-400 text-base font-bold">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.602-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.538 1.118l-3.368-2.447a1 1 0 00-1.176 0l-3.368 2.447c-.783.57-1.838-.197-1.538-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.285-3.957z"/>
                                        </svg>
                                        {{ $episode->reviews->avg('rating') ? number_format($episode->reviews->avg('rating'), 1) : 'N/A' }}/10
                                    </span>

                                    <a href="{{ route('episodes.show', $episode) }}"
                                        class="bg-accent hover:bg-accent-hover text-white text-base font-semibold px-3 py-1 rounded transition">
                                        Avaliar
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function showSeason(id) {
        document.querySelectorAll('.season-panel').forEach(p => p.classList.add('hidden'));
        document.querySelectorAll('.season-btn').forEach(b => b.classList.remove('bg-accent', 'text-white'));

        document.getElementById('season-' + id).classList.remove('hidden');
        document.getElementById('btn-season-' + id).classList.add('bg-accent', 'text-white');
    }

    // Abre a primeira temporada por padrão
    const firstBtn = document.querySelector('.season-btn');
    if (firstBtn) firstBtn.click();
</script>
@endsection