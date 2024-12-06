<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5dc;
        }

        .GalleryImage {
            width: 100%;
            margin-bottom: 15px;
        }
        .NewsComponents img {
            display: block;
            width: 80%;
            height: auto;
            max-height: 400px;
            margin: 0 auto;
            border-radius : 50px;
        }

        .NewsTitle h5 {
            color: white;
            margin-bottom: 50px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 10px 20px;
            display: inline-block;
        }
        .GalleryImage img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 70px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .Paging {
            justify-content: center;
            display: flex;
            gap: 10px;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .Paging .PagingLink {
            padding: 6px 12px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
            border-radius: 5px;
        }
        .Paging .PagingLink:hover {
            background-color: #ddd;
        }
        .Paging .page-item.active .PagingLink {
            font-weight: bold;
            background-color: #007bff;
            color: white;
        }
        .Paging .page-item.disabled .PagingLink {
            background-color: #e9ecef;
            cursor: not-allowed;
        }
        .NewsPrevIcon,
        .NewsNextIcon {
            background-color: #000;
            width: 20px;
            height: 20px;
        }
        
        .NewsTitle .btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 7px 13px;
            border-radius: 5px;
            color: white;
            background-color: rgba(128, 128, 128, 0.5);
            font-size: 1rem;
        }
        .NewsTitle .btn:hover {
            background-color: rgba(128, 128, 128, 0.7);
        }
        h1, h2 {
            text-align: center;
        }
    </style>
    <div class="container">
        <br></br>
        <h1>Berita ACM</h1>
        <br></br>
        <div id="NewsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner NewsComponents">
                @foreach($activities as $key => $activity)
                    <div class="carousel-item NewsImage {{ $key === 0 ? 'active' : '' }}">
                        @isset($activity->cover_image)
                            <img src="{{ asset('storage/' . $activity->cover_image) }}" alt="{{ $activity->title }}">
                        @endisset
                        <div class="carousel-caption NewsTitle d-block">
                            <h5>{{ $activity->title }}</h5>
                            <a href="{{ route('activity.show', $activity->id) }}" class="btn">Selengkapnya --></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev NewsPrev" type="button" data-bs-target="#NewsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon NewsPrevIcon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next NewsNext" type="button" data-bs-target="#NewsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon NewsNextIcon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div>
            <br></br>
            <h1>Galeri ACM</h1>
            <br></br>
            <div class="row">
                @foreach($activitygalleries as $galleryItem)
                    @isset($galleryItem->image)
                        <div class="col">
                            <div class="GalleryImage">
                                <img src="{{ asset('storage/' . $galleryItem->image) }}" alt="{{ $galleryItem->label }}">
                            </div>
                        </div>
                    @endisset
                @endforeach
            </div>
            <div class="Paging">
                @unless($activitygalleries->onFirstPage())
                    <a class="PagingLink" href="{{ $activitygalleries->previousPageUrl() }}">&lt;</a>
                @endunless
                @for ($i = 1; $i <= $activitygalleries->lastPage(); $i++)
                    <a class="PagingLink" href="{{ $activitygalleries->url($i) }}">{{ $i }}</a>
                @endfor
                @if ($activitygalleries->hasMorePages())
                    <a class="PagingLink" href="{{ $activitygalleries->nextPageUrl() }}">&gt;</a>
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-layout>


