<x-layout>
    <x-slot:title>{{  $title }}</x-slot:title>
    <style>
        body {
            background-color: #FFFBF4;
        }

        h1, h2 {
            text-align: center;
        }

        .NewsComponents img {
            display: block;
            width: 100%;
            height: auto;
            max-height: 600px;
            margin: 0 auto;
            border-radius: 60px;
            object-fit: cover;
        }

        .NewsTitle p {
            color: white;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 400;
            text-align: left;
            padding-left: 20px;
        }

        .NewsTitleContainer {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 40px;
            position: relative;
        }

        .NewsTitleContainer .btn {
            color: white;
            background-color: rgba(179, 167, 168, 0.71);
            border: none;
            padding: 5px 10px;
            border-radius: 15px;
            text-decoration: none;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .NewsTitleContainer .btn:hover {
            background-color: #5a6268;
        }

        .GalleryContainer {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .GalleryComponents {
            overflow: hidden;
            border-radius: 10px;
        }

        .GalleryImage {
            width: 100%;
            margin-bottom: 15px;
        }

        .GalleryImage img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 70px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .Pagination {
            justify-content: center;
            display: flex;
            gap: 10px;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .Pagination .PaginationLink {
            padding: 6px 12px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            color: #333;
            border-radius: 5px;
        }

        .Pagination .PaginationLink:hover {
            background-color: #ddd;
        }

        .Pagination .page-item.active .PaginationLink {
            font-weight: bold;
            background-color: #007bff;
            color: white;
        }

        .Pagination .page-item.disabled .PaginationLink {
            background-color: #e9ecef;
            cursor: not-allowed;
        }

        .modal-content{
            position: relative;
            background-color: transparent;
            border: none;
        }

        #GalleryPhotoImage {
            max-width: 90%;
            max-height: 80vh;
            object-fit: contain;
        }

        .Icon {
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

        .Icon:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @media (max-width: 768px) {
            .NewsComponents img {
                border-radius: 30px;
                height: 400px;
            }

            .NewsTitle p {
                font-size: 18px;
            }

            .NewsTitleContainer {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .NewsComponents img {
                border-radius: 30px;
                height: 300px;
            }

            .NewsTitle p {
                font-size: 16px;
            }

            .NewsTitleContainer {
                padding: 15px;
            }

            .GalleryContainer {
                grid-template-columns: repeat(1, 1fr);
                gap: 10px;                  
            }
        }

        @media (max-width: 360px) {
            .NewsComponents img {
                border-radius: 30px;
                height: 100px;
            }

            .NewsTitle p {
                font-size: 8px;
            }

            .NewsTitleContainer {
                padding: 1px 3px;
            }

            .GalleryContainer {
                grid-template-columns: repeat(1, 1fr);
                gap: 10px;                  
            }
        }

    </style>
    <div class="container">
        <br></br>
        <h1>Berita ACM</h1>
        <br></br>
        <div id="NewsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner NewsComponents">
                @foreach($activities as $key => $activity)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        @isset($activity->cover_image)
                            <img src="{{ asset('storage/' . $activity->cover_image) }}" alt="{{ $activity->title }}">
                        @endisset
                        <div class="carousel-caption NewsTitle d-block">
                            <div class="NewsTitleContainer">
                                <p>{{ $activity->title }}</p>
                                <a href="{{ route('activity.show', $activity->id) }}" class="btn">Selengkapnya --></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev CarouselPrev" type="button" data-bs-target="#NewsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon CarouselPrevIcon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next CarouselNext" type="button" data-bs-target="#NewsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon CarouselNextIcon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div>
            <br></br>
            <h1>Galeri ACM</h1>
            <br></br>
            <div class="GalleryContainer">
                @foreach($activitygalleries as $galleryItem)
                    @isset($galleryItem->image)
                        <div class="GalleryComponents">
                            <div class="GalleryImage">
                                <img src="{{ asset('storage/' . $galleryItem->image) }}" alt="{{ $galleryItem->label }}" data-bs-toggle="modal" data-bs-target="#GalleryPhoto" data-index="{{ $loop->index }}">
                            </div>
                        </div>
                    @endisset
                @endforeach
            </div>
            <div class="Pagination">
                @unless($activitygalleries->onFirstPage())
                    <a class="PaginationLink" href="{{ $activitygalleries->previousPageUrl() }}">&lt;</a>
                @endunless
                @for ($i = 1; $i <= $activitygalleries->lastPage(); $i++)
                    <a class="PaginationLink" href="{{ $activitygalleries->url($i) }}">{{ $i }}</a>
                @endfor
                @if ($activitygalleries->hasMorePages())
                    <a class="PaginationLink" href="{{ $activitygalleries->nextPageUrl() }}">&gt;</a>
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade" id="GalleryPhoto" tabindex="-1" aria-labelledby="GalleryPhotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="GalleryPhotoItem">
                <div class="modal-body text-center position-relative">
                    <button id="prevIcon" class="btn Icon" style="left: 10px;">‹</button>
                    <img id="GalleryPhotoImage" class="img-fluid" src="" alt="">
                    <button id="nextIcon" class="btn Icon" style="right: 10px;">›</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const GalleryPhotoImage = document.getElementById('GalleryPhotoImage');
        const prevIcon = document.getElementById('prevIcon');
        const nextIcon = document.getElementById('nextIcon');
        const galleryImages = document.querySelectorAll('.GalleryImage img');
        let currentIndex = 0;

        galleryImages.forEach((img, index) => {
            img.addEventListener('click', function() {
                currentIndex = index;
                GalleryPhotoImage.src = this.src;
                prevIcon.style.display = 'block';
                nextIcon.style.display = 'block';
            });
        });

        function updateGalleryPhotoImage(index) {
            currentIndex = index;
            GalleryPhotoImage.src = galleryImages[currentIndex].src;
        }

        prevIcon.addEventListener('click', () => {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : galleryImages.length - 1;
            updateGalleryPhotoImage(currentIndex);
        });

        nextIcon.addEventListener('click', () => {
            currentIndex = (currentIndex < galleryImages.length - 1) ? currentIndex + 1 : 0;
            updateGalleryPhotoImage(currentIndex);
        });
    </script>
</x-layout>