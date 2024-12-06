<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Activity</title>
    <style>
        body {
            background-color: #fdf5f0;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .carousel-item {
            border-radius: 20px;
            overflow: hidden;
        }
        .carousel-item img {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            border-radius: 20px;
            margin: 0 auto;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            top: 50%;
            transform: translateY(-50%);
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            border-radius: 50%;
            padding: 10px;
        }
        .gallery-item {
            overflow: hidden;
            border-radius: 20px;
            margin-bottom: 20px;
        }
        .gallery-item img {
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            border-radius: 20px;
        }
        .pagination {
            justify-content: center;
        }
        .read-more-btn {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px 15px;
            text-align: center;
            font-size: 14px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            text-decoration: none;
        }
        .read-more-btn:hover {
            background-color: #333;
        }
        .carousel-caption h5 {
            color: #fff;
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Berita ACM</h1>
        <div id="activityCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($activities as $key => $activity)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        @if ($activity->image)
                            <img src="data:image/jpeg;base64,{{ base64_encode($activity->image) }}" alt="{{ $activity->label }}">
                        @endif
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $activity->label }}</h5>
                        </div>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
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
            <div class="pagination mt-4">
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
