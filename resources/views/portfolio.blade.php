<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.app')

    <div class="container mt-5">
        <h1>Our Portfolio</h1>
        <p>Take a look at some of the projects we've completed for our satisfied clients.</p>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="https://en.wikiarquitectura.com/wp-content/uploads/2017/01/37_yokohama.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">A successful web development project for a global client.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="https://farm6.staticflickr.com/5343/30212993894_85351f21ba.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">A custom mobile app developed for a major retail company.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
