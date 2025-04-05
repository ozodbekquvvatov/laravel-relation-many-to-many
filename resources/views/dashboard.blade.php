    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        {{-- Dashboardd bitta bugani uchun layoutlamadim --}}
        <div class="container mt-5">
            <h2 class="mb-4">Dashboard</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Kitoblar CRUD</h5>
                            <p class="card-text">Kitoblarni boshqarish (qo'shish, tahrirlash, o'chirish).</p>
                            <a href="{{route('books.index')}}" class="btn btn-primary">Kitoblar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Mualliflar CRUD</h5>
                            <p class="card-text">Mualliflarni boshqarish (qo'shish, tahrirlash, o'chirish).</p>
                            <a href="{{route('authors.index')}}" class="btn btn-primary">Mualliflar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>




























    