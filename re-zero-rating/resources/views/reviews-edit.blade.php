@extends('master')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Editar Review</h1>

    <form action="{{ route('reviews.update', $review) }}" method="POST" class="max-w-md space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold mb-1">Título</label>
            <input type="text" name="title" value="{{ old('title', $review->title) }}" class="border rounded w-full p-2">
        </div>

        <div>
            <label class="block font-semibold mb-1">Conteúdo</label>
            <textarea name="content" class="border rounded w-full p-2">{{ old('content', $review->content) }}</textarea>
        </div>

        <div>
            <label class="block font-semibold mb-1">Nota (1-5)</label>
            <input type="number" name="rating" min="1" max="5" value="{{ old('rating', $review->rating) }}" class="border rounded w-full p-2">
        </div>

        @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        @error('content') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        @error('rating') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Salvar</button>
        <a href="{{ route('reviews.index') }}" class="text-gray-500 ml-2">Cancelar</a>
    </form>
@endsection