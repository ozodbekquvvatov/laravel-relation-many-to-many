@extends('layouts.author')
@section('title', 'Author List')
@section('content')
<div class="container mt-5">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Dashboard</a>

    <h2 class="mb-4">Mualliflar</h2>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Muallif Yaratish</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Muallif Nomi</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info btn-sm">Ko'rish</a>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">Tahrirlash</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">O'chirish</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
