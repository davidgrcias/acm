<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General Reset for the Layout */
        body, html {
            height: 100%;
        }

        @keyframes slide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }

        /* Logos Section */
        .logos {
            overflow: hidden;
            width: 100%;
            height: 150px;
            position: relative;
            margin-bottom: 30px;
        }

        .logos-slide {
            display: flex;
            animation: scroll 10s linear infinite;
        }

        .logos-slide img {
            width: 25%;
            height: 100%;
            object-fit: cover;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Welcome Section */
        .container-fotowelcome {
            position: relative;
            overflow: hidden;
            color: white;
            width: 98%;
            height: 50%;
            padding: 0 90px;
            border-radius: 50px;
            margin: 30px auto;
            display: flex;
            justify-content: center;
            flex-direction: column;
            aspect-ratio: 16/9;
        }

        #background-slider {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out;
            opacity: 0;
            z-index: -1;
        }

        .container-fotowelcome img {
            width: 10%;
            margin-left: auto;
            margin-right: 0;
        }

        a.tombol-about {
            background-color: #E23917;
            color: white;
            border-radius: 50px;
            padding: 10px;
            width: 224px;
            text-align: center;
            opacity: 86%;
            transition: 0.5s;
        }

        a.tombol-about:hover {
            background-color: white;
            color: black;
        }

        .quotes {
            padding: 30px;
            margin: 70px;
            width: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        .join-us-section {
            padding: 30px;
            margin: 70px;
            text-align: center;
        }

        .join-us-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .join-us-button:hover {
            background-color: #45a049;
        }

        .button-icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
            filter: brightness(0) invert(1);
        }

        /* Carousel Section */
        .carousel-inner img {
            width: 100%;
            height: auto;
            object-fit: cover;
            aspect-ratio: 16/9;
        }

        .carousel-item {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 15px;
        }

        .carousel-item .card {
            flex: 1;
            margin: 0 5px;
        }

        @media (max-width: 720px) {
            .carousel-item .card {
                width: 45%;
                margin-bottom: 10px;
            }
            .container-fotowelcome img {
                width: 50px;
            }
        }

        @media (max-width: 576px) {
            .carousel-item .card {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        #nextBtn,
        #prevBtn {
            width: 30px;
            transition: 2s;
        }

        .carousel-item {
            transition: transform 0.5s ease-in-out;
        }

        .carousel-inner {
            display: flex;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        /* Testimonial Section */
        .testimony-item.left .testimony-content {
            flex-direction: row;
        }

        .testimony-item.left .testimony-text {
            text-align: left;
        }

        .testimony-item.right .testimony-content {
            flex-direction: row-reverse;
        }

        .testimony-item.right .testimony-text {
            text-align: right;
        }

        .testimony-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .testimony-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .testimony-content {
            display: flex;
            gap: 20px;
            background-color: #8EC73D;
            border-radius: 15px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }

        .testimony-img img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
        }

        .testimony-text {
            flex: 1;
            color: black;
            font-size: 16px;
            padding: 10px;
            word-wrap: break-word;
        }

        .testimony-text p {
            margin: 5px 0;
        }

        @media (max-width: 720px) {
            .testimony-content {
                flex-direction: column !important;
            }

            .testimony-img img {
                width: 80px;
                height: 80px;
            }

            .testimony-text p {
                text-align: center;
            }
        }

    </style>

    <div class="container-home">
        <!-- Welcome Section -->
        <div class="container-fotowelcome">
            <div id="background-slider" style="background-size: cover; background-position: center;"></div>
            <img src="{{ asset('storage/' . $view->favicon_logo) }}" alt="ARK Care Ministry">
            <h3 style="color:white;"><b>{{ $view->greeting_message }}</b></h3>
            <p style="color:white;">{{ $view->tagline }}</p>
            <a href="/about" class="tombol-about">About Us</a>
        </div>

        <!-- Quotes Section -->
        <div class="quotes">
            <p style="color:#2B2525;" align="center"><strong>{{ $view->quotes }}</strong></p>
            <p>{{ $view->quotesby }}</p>
        </div>

        <!-- Logos Section -->
        <div class="logos">
            <div class="logos-slide">
                @if($view)
                    @foreach(['introduction_banner_1', 'introduction_banner_2', 'introduction_banner_3', 'introduction_banner_4'] as $banner)
                        @if($view->$banner)
                            <img src="{{ asset('storage/' . $view->$banner) }}" alt="Carousel Image" />
                        @endif
                    @endforeach
                @else
                    <p>No images available</p>
                @endif
            </div>
        </div>

        <!-- Join Us Section -->
        <div class="join-us-section">
            <p style="color:#2B2525;"><strong>{{ $view->explanation }}</strong></p>
            <br/><br/>
            <a href="https://forms.gle/exampleGoogleFormLink" target="_blank" class="donate-button">
                Join ua
            </a>
        </div>

        <!-- Our Program Section -->
        <div class="ourprogram w-full py-16 px-4" style="background-color: #443333;">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h3 class="font-bold text-white">Our Program</h3>
                <h6 style="color: #ffaa23;">We help those in need</h6>
            </div>

            <!-- Carousel Section -->
            <div id="programCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="carousel-content">
                    @foreach ($testimonials as $key => $testimonial)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="carousel-item-content">
                                @foreach ($testimonial['items'] as $item)
                                    <div class="card mb-3">
                                        <img src="{{ asset('storage/' . $item['image']) }}" class="card-img-top" alt="Image">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item['title'] }}</h5>
                                            <p class="card-text">{{ $item['description'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#programCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#programCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</x-layout>
