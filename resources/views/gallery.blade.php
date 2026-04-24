@extends('layouts.app')

@section('title', 'Галерея')

@section('content')
    <div class="gallery-page">
        <h2>{{ $article['name'] }}</h2>

        <p class="gallery-date">Дата: {{ $article['date'] }}</p>

        <div class="gallery-image-box">
            <img src="{{ asset($article['full_image']) }}" alt="{{ $article['name'] }}" class="full-image">
        </div>

        <p>{{ $article['desc'] }}</p>

        <a href="{{ route('home') }}" class="back-link">← Назад на главную</a>
    </div>
@endsection
