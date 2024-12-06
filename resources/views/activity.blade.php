<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1>Our Activity</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gallery-item {
            width: 100%;
            margin-bottom: 15px;
        }
        .carousel-inner img {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            border: 3px solid lightgreen;
            border-radius: 50px;
        }

        .carousel-caption h5 {
            color: white;
            margin-bottom: 50px;
        }

        .gallery-item img {
            width: 100%;
            max-height: 300px;
            object-fit: contain;
            border: 1px solid lightgreen;
            border-radius: 40px;
        }

        .pagination {
            justify-content: center;
            display: flex;
            gap: 10px;
            margin-top: 20px;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .pagination .page-link {
            padding: 6px 12px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
            border-radius: 5px;
        }

        .pagination .page-link:hover {
            background-color: #ddd;
        }

        .pagination .page-item.active .page-link {
            font-weight: bold;
            background-color: #007bff;
            color: white;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #e9ecef;
            cursor: not-allowed;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            width: 20px;
            height: 20px;
        }

        .carousel-caption .btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 7px 13px;
            border-radius: 5px;
            color: white;
            background-color: rgba(128, 128, 128, 0.5);
            font-size: 1rem;
        }

        .carousel-caption .btn:hover {
            background-color: #0056b3;
            background-color: rgba(128, 128, 128, 0.7);
        }

        h1, h2 {
            text-align: center;
        }

    </style>
    <div class="container mt-5">
        <h2>Berita ACM</h2>

        <div id="activityCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($activities as $key => $activity)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        @isset($activity->cover_image)
                            <img src="{{ asset('storage/' . $activity->cover_image) }}" class="d-block w-100" alt="{{ $activity->title }}">
                        @endisset
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $activity->title }}</h5>
                            <a href="{{ route('activity.show', $activity->id) }}" class="btn">Baca Selengkapnya</a>
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
                @foreach($activitygalleries as $galleryItem)
                    @isset($galleryItem->image)
                        <div class="col-md-4">
                            <div class="gallery-item">
                                <img src="{{ asset('storage/' . $galleryItem->image) }}" alt="{{ $galleryItem->label }}">
                            </div>
                        </div>
                    @endisset
                @endforeach
            </div>

            <div class="pagination">
                @unless($activitygalleries->onFirstPage())
                    <a class="page-link" href="{{ $activitygalleries->previousPageUrl() }}">&lt;</a>
                @endunless

                @for ($i = 1; $i <= $activitygalleries->lastPage(); $i++)
                    <a class="page-link" href="{{ $activitygalleries->url($i) }}">{{ $i }}</a>
                @endfor

                @if ($activitygalleries->hasMorePages())
                    <a class="page-link" href="{{ $activitygalleries->nextPageUrl() }}">&gt;</a>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-layout>