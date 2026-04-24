@extends('layouts.app')

@section('title', 'Новости')

@section('content')
    <h2>Список новостей</h2>

    <div class="news-list">
        @forelse ($articles as $article)
            <article class="news-item">
                <h3>{{ $article->title }}</h3>
                <p>{{ $article->short_desc }}</p>

                @if ($article->preview_image)
                    <img src="{{ asset($article->preview_image) }}" alt="{{ $article->title }}" class="news-image">
                @endif
            </article>
        @empty
            <p>Новостей пока нет.</p>
        @endforelse
    </div>
@endsection
