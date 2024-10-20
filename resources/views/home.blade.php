<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.app')

    <div class="container text-center mt-5">
        <h1 class="display-4">Welcome to Our Website!</h1>
        <p class="lead">This is the home page of the website, where you can find the latest updates and announcements.</p>
        <a href="{{ url('/services') }}" class="btn btn-primary">View Our Services</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
