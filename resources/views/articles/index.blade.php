@extends('layouts.app')

@section('title', 'Новости')

@section('content')
    <h2>Список новостей</h2>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('articles.create') }}" class="back-link add-news-link">+ Добавить новость</a>

    <div class="news-list">
        @forelse ($articles as $article)
            <article class="news-item">
                <h3>{{ $article->title }}</h3>
                <p class="gallery-date">Дата: {{ $article->created_at?->format('d.m.Y') }}</p>
                <p>{{ $article->short_desc }}</p>

                @if ($article->preview_image)
                    <a href="{{ route('articles.show', $article) }}" class="preview-link">
                        <img src="{{ asset($article->preview_image) }}" alt="{{ $article->title }}" class="news-image">
                    </a>
                @endif

                <div class="article-actions">
                    <a href="{{ route('articles.show', $article) }}">Открыть</a>
                    <a href="{{ route('articles.edit', $article) }}">Редактировать</a>

                    <form action="{{ route('articles.destroy', $article) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Удалить новость?')">Удалить</button>
                    </form>
                </div>
            </article>
        @empty
            <p>Новостей пока нет.</p>
        @endforelse
    </div>

    <div class="pagination-wrap">
        {{ $articles->links('pagination::bootstrap-5') }}
    </div>
@endsection
