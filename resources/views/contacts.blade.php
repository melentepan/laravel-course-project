@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h2>Контакты</h2>
    <p class="contact-item"><strong>Адрес:</strong> {{ $contacts['address'] }}</p>
    <p class="contact-item"><strong>Email:</strong> {{ $contacts['email'] }}</p>
    <p class="contact-item"><strong>Телефон:</strong> {{ $contacts['phone'] }}</p>
@endsection
