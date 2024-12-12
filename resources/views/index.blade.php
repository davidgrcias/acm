<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box; /* Added for better box model handling */
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        .logos {
            overflow: hidden; 
            width: 100%; 
            height: auto; 
            position: relative;
            margin-bottom: 30px;
        }

        .logos-slide {
            display: flex; 
            animation: scroll 10s linear infinite; 
        }

        .logos-slide img {
            width: 25%; 
            height: auto; 
            object-fit: cover; 
        }

        .container-fotowelcome {
            position: relative;
            overflow: hidden;
            color: white;
            width: 98%;
            padding: 2% 5% 0;
            border-radius: 50px;
            margin: 30px auto;
            display: flex;
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
            margin-left: auto;
            margin-right: 0;
            margin-bottom: 10%;
            width: 10%;
        }

        a.tombol-about {
            background-color: #E23917;
            color: white;
            border-radius: 50px;
            padding: 10px;
            text-align: center;
            opacity: 86%;
            width: 20%;
            transition: background-color 0.5s, color 0.5s;
        }

        a.tombol-about:hover {
            background-color: white;
            color: black;
        }

        .quotes {
            margin: 10% auto;
            width: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 20px;
        }

        .join-us-section {
            margin: 10%;
            text-align: center;
        }

        .join-us-button {
            background-color: #28a745; 
            color: white; 
            text-decoration: none;
            padding: 10px 20px; 
            font-size: 16px; 
            border-radius: 25px; 
            border: none; 
            display: inline-block; 
            transition: background-color 0.3s ease; 
        }

        .join-us-button:hover {
            background-color: #45a049; 
        }

        .ourprogram {
            padding: 40px;
            margin-bottom: 20px;
            background-color: #443333;
            align-items: center;
        }

        .carousel-inner img {
            aspect-ratio: 16/9;
            width: 100%; /* Make images responsive */
            height: auto; /* Maintain aspect ratio */
        }

        .carousel-item {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        .carousel-item .card {
            flex: 1;
            margin: 0 5px;
        }
        .row{
            justify-content:center;
        }
        @media (max-width: 720px) {
            .carousel-item .card {
                width: 45%;
                margin-bottom: 10px;
            }
            .container-fotowelcome img{
                width: 50px;
                padding-top: 10px;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            .carousel-item .card {
                width: 100%;
                margin-bottom:10px;
            }
            a.tombol-about{
                width: 28%;
            }
            container-fotowelcome img{
                padding-top: 10px;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 768px) {
            #programCarousel .carousel-control-prev,
            #programCarousel .carousel-control-next {
                display: none; /* kalo layar kecil, tombolnya diilangin */
            }

            .carousel-inner {
                flex-wrap: wrap;
                display: flex;
            }

            .carousel-item {
                flex: 1 1 100%;
                display: block;
                margin-bottom: 20px;
            }

            .carousel-item .card {
                margin: auto;
            }
        }

        #nextBtn,
        #prevBtn {
            width: 30px;
            transition: 2s;
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
            display : flex;
            gap: 20px;
            background-color: #ffc78f;
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
            .logos-slide img {
                width: 50%;
            }

            .container-fotowelcome img {
                width: 50px;
                padding-top: 10px;
                margin-bottom: 10px;
            }

            .join-us-button {
                width: 80%;
            }

            .carousel-item .card {
                width: 100%;
                margin-bottom: 10px;
            }

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

        @media (max-width: 576px) {
            a.tombol-about {
                width: 80%; 
            }
        }
    </style>

    <div class="container-home">
        <div class="container-fotowelcome">
            <div id="background-slider"></div>
            <img src="{{ asset('storage/' . $view->favicon_logo) }}" alt="ARK Care Ministry">
            <h3 style="color:white;"><b>{{ $view->greeting_message }}</b></h3>
            <p style="color:white;">{{ $view->tagline }}</p>
            <a href="/about" class="tombol-about">About Us</a>
        </div>

        <div class="quotes">
            <p style="color: #2B2525;"><b>{{ $view->quotes }}</b></p>
            <p>{{ $view->quotesby }}</p>
        </div>

        <div class="logos">
            <div class="logos-slide">
                @if($view)
                    @foreach(['introduction_banner_1', 'introduction_banner_2', 'introduction_banner_3', 'introduction_banner_4'] as $banner)
                        @if($view->$banner)
                            <img src="{{ asset('storage/' . $view->$banner) }}" alt="Carousel Image"/>
                        @endif
                    @endforeach
                @else
                    <p>No images available</p>
                @endif
            </div>
        </div>        

        <div class="join-us-section">
            <p style="color:#2B2525;"><b>{{ $view->explanation }}</b></p>
            <a href="https://forms.gle/exampleGoogleFormLink" target="_blank" class="join-us-button">Join Us</a>
        </div>        

        <div class="ourprogram">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h3 class="font-bold text-white">Our Program</h3>
                <h6 style="color: #ffaa23;">We help those in need</h6>
            </div>

            <div id="programCarousel" class="carousel slide container-fluid" data-bs-ride="carousel">
                <div class="carousel-inner" id="carousel-inner"></div>
                <br/>
                <button class="carousel-control-prev" type="button" id="prevBtn">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" id="nextBtn">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container-testimoni" align="center" style="margin-bottom:20px;">
            <h3 style="margin-top:100px;">{{ $view->testimonial_title }}</h3>
            <div class="testimony-grid">
                @foreach($testimonies as $index => $testimony)
                    <div class="testimony-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
                        <div class="testimony-content">
                            <div class="testimony-img">
                                <img src="{{ asset('storage/' . $testimony->image) }}" alt="Profile">
                            </div>
                            <div class="testimony-text">
                                <p style="color:#2B2525;"> "{{ $testimony->text }}"</p>
                                <p>- {{ $testimony->status }} -</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Background image di "Welcome to ACM"
        const sliderData = @json($slider); 
        let currentIndex = 0;

        function updateBackground() {
            const sliderDiv = document.getElementById('background-slider');

            if (sliderData.length > 0) {
                const image = sliderData[currentIndex].image;

                sliderDiv.style.opacity = 0;

                setTimeout(function () {
                    sliderDiv.style.backgroundImage = `url('storage/${image}')`;
                    sliderDiv.style.opacity = 1;
                }, 700); 

                currentIndex = (currentIndex + 1) % sliderData.length;
            }
        }

        updateBackground();
        setInterval(updateBackground, 4000); 
        
        document.addEventListener("DOMContentLoaded", function () {
            const logosSlide = document.querySelector(".logos-slide");
            const logosContainer = document.querySelector(".logos");

            const containerWidth = logosContainer.offsetWidth;
            const imageWidth = logosSlide.querySelector("img").offsetWidth;

            const imagesNeeded = Math.ceil(containerWidth / imageWidth);

            for (let i = 0; i < imagesNeeded; i++) {
                logosSlide.innerHTML += logosSlide.innerHTML;
            }

            logosSlide.style.display = "flex";
        });
        
        document.addEventListener("DOMContentLoaded", function () {
            const programs = @json($programs);
            
            function renderProgramsForMobile(){
                const carouselInner = document.getElementById('carousel-inner');
                carouselInner.innerHTML = '';

                programs.forEach(program => {
                    const cardDiv = document.createElement('div');
                    cardDiv.classList.add('card', 'h-100', 'w-100');
                    cardDiv.innerHTML = `
                        <img src="/storage/${program.image}" class="card-img-top" alt="${program.title}">
                        <div class="card-body">
                            <h5 class="card-title">${program.title}</h5>
                            <p class="card-text">${program.description.slice(0, 100)}</p>
                        </div>
                    `;
                    
                    carouselInner.appendChild(cardDiv);
                });
            }

            function renderCarouselForDesktop() {
                let carouselIndex = 0;

                function updateCarousel() {
                    const carouselInner = document.getElementById('carousel-inner');
                    carouselInner.innerHTML = '';

                    const chunk = [
                        programs[carouselIndex % programs.length],
                        programs[(carouselIndex + 1) % programs.length],
                        programs[(carouselIndex + 2) % programs.length]
                    ];

                    const itemDiv = document.createElement('div');
                    itemDiv.classList.add('carousel-item', 'justify-content-center');
                    const rowDiv = document.createElement('div');
                    rowDiv.classList.add('row', 'w-100', 'container-fluid');

                    chunk.forEach(program => {
                        const colDiv = document.createElement('div');
                        colDiv.classList.add('col-12', 'col-md-4', 'd-flex', 'mb-3');

                        const cardDiv = document.createElement('div');
                        cardDiv.classList.add('card', 'h-100', 'w-100');
                        cardDiv.innerHTML = `
                            <img src="/storage/${program.image}" class="card-img-top" alt="${program.title}">
                            <div class="card-body">
                                <h5 class="card-title">${program.title}</h5>
                                <p class="card-text">${program.description.slice(0, 100)}</p>
                            </div>
                        `;
                        colDiv.appendChild(cardDiv);
                        rowDiv.appendChild(colDiv);
                    });

                    itemDiv.appendChild(rowDiv);
                    carouselInner.appendChild(itemDiv);
                }
                function nextSlide() {
                carouselIndex = (carouselIndex + 1) % programs.length;
                updateCarousel();
            }

            function prevSlide() {
                carouselIndex = (carouselIndex - 1 + programs.length) % programs.length;
                updateCarousel();
            }

            document.getElementById('nextBtn').addEventListener('click', nextSlide);
            document.getElementById('prevBtn').addEventListener('click', prevSlide);

            updateCarousel();
        }

        function adjustLayout(){
            if(window.innerWidth < 768){
                renderProgramsForMobile();
            } else {
                renderCarouselForDesktop();
            }
        }

        window.addEventListener('resize', adjustLayout);
        adjustLayout();
        });
    </script>
</x-layout>