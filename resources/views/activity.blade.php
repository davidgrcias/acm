<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFBF4;
        }

        .GalleryImage {
            width: 100%;
            margin-bottom: 15px;
        }

        .NewsComponents img {
            display: block;
            width: 100%;
            height: 600px;
            max-height: 600px;
            margin: 0 auto;
            border-radius: 60px;
        }

        @media (max-width: 768px) {
            .NewsComponents img {
                width: 100%;
                height: auto;
                max-width: 100%;
                border-radius: 30px;
            }
        }

        .NewsTitle p {
            color: white;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 400;
            text-align: left;
            padding-left: 20px;
        }

        .title-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 40px;
            position: relative;
        }

        .title-container .btn {
            color: white;
            background-color: #B3A7A8;
            border: none;
            padding: 5px 10px;
            border-radius: 15px;
            text-decoration: none;
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(179, 167, 168, 0.71);
        }

        .title-container .btn:hover {
            background-color: #5a6268;
        }

        .GalleryImage img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 70px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
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

        h1, h2 {
            text-align: center;
        }

        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            position: relative;
            background-color: transparent;
            border: none;
        }

        .modal-body {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        #modalImage {
            max-width: 90%;
            max-height: 80vh;
            object-fit: contain;
        }

        .nav-icon {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }

        #prevIcon {
            left: 10px;
        }

        #nextIcon {
            right: 10px;
        }

        .nav-icon:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 10px;
        }
    </style>
    <div class="container">
        <br></br>
        <h1>Berita ACM</h1>
        <br></br>
        <div id="NewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner NewsComponents">
                @foreach($activities as $key => $activity)
                    <div class="carousel-item NewsImage {{ $key === 0 ? 'active' : '' }}">
                        @isset($activity->cover_image)
                            <img src="{{ asset('storage/' . $activity->cover_image) }}" alt="{{ $activity->title }}">
                        @endisset
                        <div class="carousel-caption NewsTitle d-block">
                            <div class="title-container">
                                <p>{{ $activity->title }}</p>
                                <a href="{{ route('activity.show', $activity->id) }}" class="btn">Selengkapnya --></a>
                            </div>
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
            <div class="gallery-container">
                @foreach($activitygalleries as $galleryItem)
                    @isset($galleryItem->image)
                        <div class="gallery-item">
                            <div class="GalleryImage">
                                <img src="{{ asset('storage/' . $galleryItem->image) }}" alt="{{ $galleryItem->label }}" data-bs-toggle="modal" data-bs-target="#galleryModal" data-index="{{ $loop->index }}">
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

    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <button id="prevIcon" class="btn nav-icon" style="left: 10px;">‹</button>
                    <img id="modalImage" class="img-fluid" src="" alt="">
                    <button id="nextIcon" class="btn nav-icon" style="right: 10px;">›</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const modalImage = document.getElementById('modalImage');
        const prevIcon = document.getElementById('prevIcon');
        const nextIcon = document.getElementById('nextIcon');
        const galleryImages = document.querySelectorAll('.GalleryImage img');
        let currentIndex = 0;

        galleryImages.forEach((img, index) => {
            img.addEventListener('click', function() {
                currentIndex = index;
                modalImage.src = this.src;
                prevIcon.style.display = 'block';
                nextIcon.style.display = 'block';
            });
        });

        function updateModalImage(index) {
            currentIndex = index;
            modalImage.src = galleryImages[currentIndex].src;
        }

        prevIcon.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : galleryImages.length - 1;
            updateModalImage(currentIndex);
        });

        nextIcon.addEventListener('click', () => {
            currentIndex = (currentIndex < galleryImages.length - 1) ? currentIndex + 1 : 0;
            updateModalImage(currentIndex);
        });
    </script>
</x-layout>
