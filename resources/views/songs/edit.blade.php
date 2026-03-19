<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Song</h3>
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

                        <form action="{{ route('songs.update', $songs->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="text" name="track_title" class="form-control mb-2" value="{{ $songs->track_title }}" required>
                            <input type="text" name="artist_name" class="form-control mb-2" value="{{ $songs->artist_name }}" required>
                            <input type="text" name="genre" class="form-control mb-2" value="{{ $songs->genre }}" required>
                            <input type="text" name="duration" class="form-control mb-2" value="{{ $songs->duration }}" required>
                            <input type="date" name="release_date" class="form-control mb-2" value="{{ $songs->release_date }}" required>

                            <a href="{{ route('songs.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Song</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
