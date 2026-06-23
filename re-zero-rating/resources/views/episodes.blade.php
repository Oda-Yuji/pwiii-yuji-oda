@extends('master')

@section('content')
    <h1 class="text-3xl font-bold my-4">Reviews de Re:ZERO</h1>
    <p class="mb-4">Essa é a página de reviews do meu site de avaliações de Re:ZERO</p>
    <a href="{{ route('home') }}" class="text-blue-500 hover:underline mb-6 inline-block">Volte para home</a>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($episodes as $episode)
            <a href="{{ route('episodes.show', $episode) }}" class="relative bg-zinc-800 rounded-lg shadow-md border border-gray-200 p-4 block hover:border-blue-400 transition">
                <div class="absolute top-3 right-3 flex items-center gap-1 bg-gray-900 text-yellow-400 text-sm font-bold px-2 py-1 rounded">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.602-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.538 1.118l-3.368-2.447a1 1 0 00-1.176 0l-3.368 2.447c-.783.57-1.838-.197-1.538-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.063 9.384c-.783-.57-.38-1.81.588-1.81h4.163a1 1 0 00.95-.69l1.285-3.957z"/>
                    </svg>
                    {{ number_format($episode->reviews->avg('rating'), 1) }}/5
                </div>

                <h2 class="text-lg font-bold pr-16">Ep. {{ $episode->number }} — {{ $episode->title }}</h2>

                <ul class="mt-3 space-y-1">
                    @foreach ($episode->reviews->take(3) as $review)
                        <li class="text-gray-400 text-sm truncate">"{{ $review->content }}"</li>
                    @endforeach
                </ul>
            </a>
        @endforeach
    </div>
@endsection