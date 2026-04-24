@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <h2>{{ $article->title }}</h2>
    <p class="gallery-date">Дата: {{ $article->created_at?->format('d.m.Y') }}</p>

    <p><strong>Кратко:</strong> {{ $article->short_desc }}</p>

    @if ($article->full_image)
        <img src="{{ asset($article->full_image) }}" alt="{{ $article->title }}" class="full-image article-full-image">
    @elseif ($article->preview_image)
        <img src="{{ asset($article->preview_image) }}" alt="{{ $article->title }}" class="news-image article-full-image">
    @endif

    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.edit', $article) }}" class="back-link">Редактировать</a>
    <a href="{{ route('articles.index') }}" class="back-link">Назад к списку</a>
@endsection
