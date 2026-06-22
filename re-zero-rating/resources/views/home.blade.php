@extends('master')

@section('content')
    <h1 class="text-3xl font-bold my-4">Reviews de Re:ZERO</h1>

    <p class="mb-4">Essa é a página inicial do meu site de avaliações de Re:ZERO</p>

    <a href="{{ route('reviews.index') }}" class="text-blue-500 hover:underline mb-6 inline-block">Veja as reviews</a>

    <img src="{{ asset('images/aura-monster.gif') }}" alt="Re:Zero Image" class="size-96 mx-auto">
@endsection