
@extends('layouts.author')
@section('title', 'Author Edit')
@section('content')<div class="container mt-5">
    <h2 class="mb-4">Muallifni Tahrirlash: {{ $author->name }}
        <a class="text-danger" href="{{ route('authors.index') }}" style="margin-left: 10px;">Ortga</a>
    </h2>

    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Muallif Nomi</label>
            <input type="text" class="form-control" id="name" name="name"
                value="{{ old('name', $author->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="biography" class="form-label">Biografiya</label>
            <textarea class="form-control" id="biography" name="biography" rows="4">{{ old('biography', $author->biography) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



