<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h4>User Profile</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: {{ $profile->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Email: {{ $profile->email }}</h6>
                <p class="card-text">
                    <strong>Bio:</strong> {{ $profile->bio }}
                </p>
                <p class="card-text">
                    <small class="text-muted">Profile ID: {{ $profile->id }}</small>
                </p>
                
                <a href="{{ route('homepage') }}" class="btn btn-primary">Back to Profiles</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
