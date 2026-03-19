<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <h1>Songs List</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('songs.create') }}" class="btn btn-primary">Add New Song</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Track Title</th>
                            <th>Artist Name</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Release Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($songs as $song)
                        <tr>
                            <td>{{ $song->track_title }}</td>
                            <td>{{ $song->artist_name }}</td>
                            <td>{{ $song->genre }}</td>
                            <td>{{ $song->duration }}</td>
                            <td>{{ $song->release_date }}</td>
                            <td>
                                <a href="{{ route('songs.show', $song->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('songs.edit', $song->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('songs.destroy', $song->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No songs found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                
                <div class="d-flex justify-content-center mt-3">
                    {{ $songs->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>