<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f2f2f2;
        }

        @keyframes slide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }

        .logos {
            overflow: hidden;
            padding: 60px 0;
            background: white;
            white-space: nowrap;
            position: relative;
        }

        .logos:before,
        .logos:after {
            position: absolute;
            top: 0;
            width: 250px;
            height: 100%;
            content: "";
            z-index: 2;
        }

        .logos:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
        }

        .logos:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
        }

        .logos:hover .logos-slide {
            animation-play-state: paused;
        }

        .logos-slide {
            display: inline-block;
            animation: 35s slide infinite linear;
            white-space: nowrap;
        }

        .logos-slide img {
            height: 120px;
            margin: 0;
        }

        .container-fotowelcome {
            background-image: url('/images/home.jpg');
            width: 90%;
            padding: 90px;
            background-color: green; /* Change to image as background */
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

        a.tombol-about:hover {
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
            align-text: center;
            justify-content: center;
            flex-direction: column;
            font-size: 20px;
        }
        .join-us-section {
            padding: 30px;
            margin: 30px;
            width: 90%;
            display: flex;
            align-items: center;
            align-text: center;
            justify-content: center;
            flex-direction: column;
            font-size: 20px;
    }

    .join-us-section p {
        font-size: 18px;
        color: #333;
        margin-bottom: 20px;
    }

    .join-us-button {
        display: inline-block;
        padding: 15px 50px; /* Padding lebih besar untuk memperlebar tombol */
        background-color: #28a745; /* Hijau */
        color: white;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 30px;
        transition: background-color 0.3s ease;
        width: auto; /* Sesuaikan dengan panjang teks */
    }

    .join-us-button:hover {
        background-color: #218838; /* Hijau lebih gelap saat hover */
    }
    </style>

    <div class="container-home">
        <!-- Welcome Section -->
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>
            Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>

        <div class="quotes" align="center">
            <p>True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
                Menno Simmons<br/>
            </p>
        </div>

        <div class="logos">
            <div class="logos-slide">
                @if(isset($carouselImages) && count($carouselImages) > 0)
                    @foreach($carouselImages as $image)
                        <img src="{{ asset('uploads/' . $image) }}" alt="Carousel Image" />
                    @endforeach
                @else
                    <p>No images available</p>
                @endif
            </div>
        </div>
        
        </div>
    </div>

    <div class="join-us-section" align="center">
        <p>
            Join us in making a difference! Together, we can create a positive impact and support those in need. 
            Be a part of something meaningful.
            <br/><br/>
            <a href="/join" class="join-us-button">Join Us!</a>
        </p>
    </div>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>
</x-layout>
