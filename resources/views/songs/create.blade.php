<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Song</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Add New Song</h3>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('songs.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Track Title</label>
                                <input type="text" name="track_title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Artist Name</label>
                                <input type="text" name="artist_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Genre</label>
                                <input type="text" name="genre" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Duration (mm:ss)</label>
                                <input type="text" name="duration" class="form-control" placeholder="03:45" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Release Date</label>
                                <input type="date" name="release_date" class="form-control" required>
                            </div>

                            <a href="{{ route('songs.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Add Song</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
