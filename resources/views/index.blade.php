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
    </style>

    <div class="container-home">
        <!-- Welcome Section -->
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>
            Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>

        <!-- Quotes Section -->
        <div class="quotes" align="center">
            <p>True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
                Menno Simmons<br/>
            </p>
        </div>

        <!-- Sliding Logos Carousel Section -->
        <div class="logos">
            <div class="logos-slide">
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
            </div>

            <div class="logos-slide">
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
                <img src="{{ asset('uploads/Indonesia.jpeg') }}" />
            </div>
        </div>
    </div>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>
</x-layout>
