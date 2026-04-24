@extends('layouts.app')

@section('title', 'Редактировать новость')

@section('content')
    <h2>Редактировать новость</h2>

    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" method="POST" class="article-form">
        @csrf
        @method('PUT')

        <label for="title">Заголовок</label>
        <input id="title" type="text" name="title" value="{{ old('title', $article->title) }}" required>

        <label for="short_desc">Краткое описание</label>
        <textarea id="short_desc" name="short_desc" rows="3" required>{{ old('short_desc', $article->short_desc) }}</textarea>

        <label for="content">Полный текст</label>
        <textarea id="content" name="content" rows="6" required>{{ old('content', $article->content) }}</textarea>

        <label for="preview_image">Имя preview-файла (например preview.jpg)</label>
        <input id="preview_image" type="text" name="preview_image" value="{{ old('preview_image', $article->preview_image) }}">

        <label for="full_image">Имя full-файла (например full.jpeg)</label>
        <input id="full_image" type="text" name="full_image" value="{{ old('full_image', $article->full_image) }}">

        <button type="submit">Обновить</button>
    </form>
@endsection
