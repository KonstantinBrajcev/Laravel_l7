@extends('default')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Список работников</h1>
        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Добавить нового работника</a>
        <table class="table table-bordered">
            <thead><tr><th>ID</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Email</th>
                        <th>Действия</th></tr></thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr><td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td><a href="{{ route('edit', $employee->id) }}" class="btn btn-warning">Редактировать</a>
                        <a href="{{ route('resume', $employee->id) }}" class="btn btn-warning">PDF</a>
                        <form action="{{ route('destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form></td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
