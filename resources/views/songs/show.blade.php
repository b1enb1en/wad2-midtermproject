<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Song Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Track Title</th>
                                <td>{{ $songs->track_title }}</td>
                            </tr>
                            <tr>
                                <th>Artist</th>
                                <td>{{ $songs->artist_name }}</td>
                            </tr>
                            <tr>
                                <th>Genre</th>
                                <td>{{ $songs->genre }}</td>
                            </tr>
                            <tr>
                                <th>Duration</th>
                                <td>{{ $songs->duration }}</td>
                            </tr>
                            <tr>
                                <th>Release Date</th>
                                <td>{{ $songs->release_date }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $songs->created_at }}</td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('songs.index') }}" class="btn btn-secondary">Back</a>
                            <div>
                                <a href="{{ route('songs.edit', $songs->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('songs.destroy', $songs->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
