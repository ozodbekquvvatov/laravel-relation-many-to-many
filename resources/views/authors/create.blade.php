        @extends('layouts.author')
        @section('title', 'Author Create')
        @section('content')
            <div class="container mt-5">
                <h2>Muallif Qo'shish</h2>
                <a href="{{ route('authors.index') }}" class="text-danger" style="margin-left: 10px;">Ortga</a>

                <form action="{{ route('authors.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Muallif Nomi</label>
                        <input type="text" class="form-control" id="name" name="name">
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
        @endsection
