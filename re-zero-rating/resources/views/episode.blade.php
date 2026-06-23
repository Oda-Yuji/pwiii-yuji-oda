@extends('master')

@section('content')
    <div class="max-w-2xl mx-auto py-6">
        <a href="{{ route('episodes.index') }}" class="text-blue-500 hover:underline text-sm">← Voltar para episódios</a>

        <h1 class="text-3xl font-bold mt-4 mb-1">Ep. {{ $episode->number }} — {{ $episode->title }}</h1>

        {{-- Filtro por estrelas --}}
        <div class="flex gap-2 my-4 text-sm">
            <a href="{{ route('episodes.show', $episode) }}" class="px-3 py-1 rounded {{ !request('stars') ? 'bg-blue-500 text-white' : 'bg-zinc-700 text-gray-300' }}">Todas</a>
            @for ($i = 5; $i >= 1; $i--)
                <a href="{{ route('episodes.show', [$episode, 'stars' => $i]) }}" class="px-3 py-1 rounded {{ request('stars') == $i ? 'bg-blue-500 text-white' : 'bg-zinc-700 text-gray-300' }}">{{ $i }}★</a>
            @endfor
        </div>

        {{-- Form de criar/editar review --}}
        @auth
            <div class="bg-zinc-800 rounded-lg p-4 mb-6 border border-gray-600">
                <h2 class="font-bold mb-3">{{ $userReview ? 'Editar sua review' : 'Deixe sua review' }}</h2>
                <form action="{{ $userReview ? route('reviews.update', $userReview) : route('reviews.store', $episode) }}" method="POST" class="space-y-3">
                    @csrf
                    @if ($userReview) @method('PUT') @endif

                    <div>
                        <label class="block text-sm mb-1">Nota (1-5)</label>
                        <input type="number" name="rating" min="1" max="5" value="{{ old('rating', $userReview?->rating) }}" class="bg-zinc-700 border border-gray-500 rounded w-24 p-2 text-white">
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Comentário</label>
                        <textarea name="content" rows="3" class="bg-zinc-700 border border-gray-500 rounded w-full p-2 text-white">{{ old('content', $userReview?->content) }}</textarea>
                    </div>

                    @error('rating') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror
                    @error('content') <p class="text-red-400 text-sm">{{ $message }}</p> @enderror

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-sm">
                        {{ $userReview ? 'Salvar' : 'Publicar' }}
                    </button>
                </form>

                @if ($userReview)
                    <form action="{{ route('reviews.destroy', $userReview) }}" method="POST" onsubmit="return confirm('Deletar sua review?')" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-400 text-sm hover:underline">Deletar</button>
                    </form>
                @endif
            </div>
        @else
            <p class="mb-6 text-gray-400 text-sm"><a href="{{ route('login') }}" class="text-blue-400 hover:underline">Faça login</a> para deixar sua review.</p>
        @endauth

        {{-- Lista de reviews --}}
        <div class="space-y-4">
            @forelse ($reviews as $review)
                <div class="bg-zinc-800 rounded-lg p-4 border border-gray-700">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-semibold text-sm">{{ $review->user->name }}</span>
                        <span class="flex items-center gap-1 bg-gray-900 text-yellow-400 text-sm font-bold px-2 py-1 rounded">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.602-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.538 1.118l-3.368-2.447a1 1 0 00-1.176 0l-3.368 2.447c-.783.57-1.838-.197-1.538-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.285-3.957z"/>
                            </svg>
                            {{ $review->rating }}/5
                        </span>
                    </div>
                    <p class="text-gray-300 text-sm">{{ $review->content }}</p>
                </div>
            @empty
                <p class="text-gray-400 text-sm">Nenhuma review ainda. Seja o primeiro!</p>
            @endforelse
        </div>
    </div>
@endsection