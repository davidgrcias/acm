<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <style>
        .container-fotowelcome {
            background-color: green;
            width: 90%;
            padding: 90px;
            border-radius: 50px;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        a.tombol-about {
            background-color: #E23917;
            color: white;
            border-radius: 50px;
            padding: 10px;
            width: 224px;
            text-align: center;
            opacity: 86%;
        }

        a:hover {
            background-color: white;
            color: black;
            transition: 0.5s;
        }

        .quotes {
            padding: 30px;
            margin: 30px;
            width: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
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

        @media (max-width: 768px) {
            .carousel-item .card {
                width: 45%;
            }
        }

        @media (max-width: 576px) {
            .carousel-item .card {
                width: 100%;
            }
        }
        #nextBtn,
        #prevBtn {
            width: 30px;
        }
    </style>
    <?php

    ?>

    <div class="container-home">
        <!-- Welcome -->
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>

        <!-- Quotes -->
        <div class="quotes">
            <p style="color:black;" align="center">True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
            </p>
            <p>Menno Simmons<br/></p>
        </div>

        <!-- Our Program -->
        <div class="ourprogram w-full bg-[#3b2d2d] py-16 px-4">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h3 class="font-bold text-white mb-4">Our Program</h2>
                <h6 class="text-[#ffaa23]">We help those in need</p>
            </div>

            <!-- Carousel -->
            <div id="programCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="carousel-inner">
                    <!-- Cards will be populated dynamically -->
                </div>

                <!-- Control -->
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script>
        const programs = @json($programs);

        let currentIndex = 0;

        function updateCarousel() {
            const carouselInner = document.getElementById('carousel-inner');
            carouselInner.innerHTML = '';

            const chunk = programs.slice(currentIndex, currentIndex + 3);
            if (chunk.length < 3) {
                const remaining = 3 - chunk.length;
                chunk.push(...programs.slice(0, remaining));
            }

            const itemDiv = document.createElement('div');
            itemDiv.classList.add('carousel-item');
            if (currentIndex === 0) {
                itemDiv.classList.add('active');
            }

            const rowDiv = document.createElement('div');
            rowDiv.classList.add('row', 'w-100');

            chunk.forEach(program => {
                const colDiv = document.createElement('div');
                colDiv.classList.add('col-12', 'col-md-4', 'd-flex');

                const cardDiv = document.createElement('div');
                cardDiv.classList.add('card', 'h-100', 'w-100');
                cardDiv.innerHTML = `
                    <img src="${program.image}" class="card-img-top" alt="${program.title}">
                    <div class="card-body">
                        <h5 class="card-title">${program.title}</h5>
                        <p class="card-text">${program.description.slice(0, 100)}...</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                `;
                colDiv.appendChild(cardDiv);
                rowDiv.appendChild(colDiv);
            });

            itemDiv.appendChild(rowDiv);
            carouselInner.appendChild(itemDiv);
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % programs.length;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + programs.length) % programs.length;
            updateCarousel();
        }

        document.getElementById('nextBtn').addEventListener('click', nextSlide);
        document.getElementById('prevBtn').addEventListener('click', prevSlide);

        updateCarousel();
    </script>
</x-layout>