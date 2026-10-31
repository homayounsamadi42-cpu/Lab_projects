
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>

    <!-- Bootstrap 5 CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add a New Book</h4>
                </div>

                <div class="card-body">

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="title"
                                value="{{ old('title') }}"
                                maxlength="150"
                                required
                            >
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input
                                type="text"
                                class="form-control"
                                id="author"
                                name="author"
                                value="{{ old('author') }}"
                                maxlength="150"
                                required
                            >
                        </div>

                        <!-- Number of Pages -->
                        <div class="mb-3">
                            <label for="pages" class="form-label">Page Number</label>
                            <input
                                type="number"
                                class="form-control"
                                id="pages"
                                name="pages"
                                value="{{ old('pages') }}"
                                min="1"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Save Book
                        </button>

                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
