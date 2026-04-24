@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <h2>Главная страница</h2>

    <div class="article-list">
        @foreach ($articles as $article)
            <article class="article-card">
                <h3>{{ $article['name'] }}</h3>
                <p class="gallery-date">Дата: {{ $article['date'] }}</p>
                <p>{{ $article['shortDesc'] ?? $article['desc'] }}</p>

                <a href="{{ route('gallery', $article['id']) }}" class="preview-link">
                    <img src="{{ asset($article['preview_image']) }}" alt="{{ $article['name'] }}" class="preview-image">
                </a>
            </article>
        @endforeach
    </div>
@endsection
