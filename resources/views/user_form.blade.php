@extends('default')
@section('content')
    <h1>Данные нового работника</h1>
    <p><strong>Имя:</strong> {{ $user->first_name }}</p>
    <p><strong>Фамилия:</strong> {{ $user->last_name }}</p>
    <p><strong>Электронная почта:</strong> {{ $user->email }}</p>
    <p><strong>Рабочая информация:</strong> {{ $user->workdata }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Назад</a>


@stop
