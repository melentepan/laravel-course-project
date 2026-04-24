@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
    <h2>Регистрация</h2>

    <form action="{{ route('signin.registration') }}" method="POST" class="signin-form">
        @csrf

        <label for="name">Имя</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
