<x-layout>
    <x-slot:title>{{  $title }}</x-slot:title>
    <h1>Visi & Misi</h1>
</x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Activity</title>
    <style>
        .gallery-item {
            width: 100%;
            margin-bottom: 15px;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Our Activity</h1>

        <div id="activityCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($activities as $key => $activity)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        @if ($activity->image)
                            <img src="data:image/jpeg;base64,{{ base64_encode($activity->image) }}" class="d-block w-100" alt="{{ $activity->label }}">
                        @endif
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $activity->label }}</h5>
                            <p>{{ $activity->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#activityCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#activityCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="mt-5">
            <h2>Galeri ACM</h2>
            <div class="row">
                @foreach($activities as $activity)
                    @if($activity->image)
                        <div class="col-md-4">
                            <div class="gallery-item">
                                <img src="data:image/jpeg;base64,{{ base64_encode($activity->image) }}" alt="{{ $activity->label }}">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="pagination">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
