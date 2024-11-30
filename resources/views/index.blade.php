<!--HOME-john-->
<x-layout>
    <x-slot:title>{{  $title }}</x-slot:title>
    <style>
        .container-fotowelcome {
            background-color: green;
            width: 90%;
            padding: 90px;
            border-radius:50px;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        a.tombol-about{
            background-color: #E23917;
            color: white;
            border-radius: 50px;
            padding: 10px;
            width:224px;
            text-align: center;
            opacity: 86%;
        }
        a:hover{
            background-color: white;
            color: black;
            transition: 0.5s;
        }
        .quotes{
            padding:30px;
            margin:30px;
            width:90%;
            display: flex;
            align-items: center;
            align-text:center;
            justify-content: center;
            flex-direction: column;
            font-size: 20px;
            margin-left:auto;
            margin-right:auto;
        }
        
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
            text-decoration: none;
        }

        :root {
            --primary: #ec994b;
            --white: #ffffff;
            --bg: #f5f5f5;
        }

        @media (min-width: 1440px) {
            html {
                zoom: 1.5;
            }
        }

        @media (min-width: 2560px) {
            html {
                zoom: 1.7;
            }
        }

        @media (min-width: 3860px) {
            html {
                zoom: 2.5;
            }
        }

        ::-webkit-scrollbar {
            width: 1.3rem;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background: #797979;
            transition: all 0.5s ease-in-out;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #222224;
        }

        ::-webkit-scrollbar-track {
            background: #f9f9f9;
        }

        .container-slider {
            max-width: 124rem;
            padding: 0 1rem;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .section-heading {
            font-size: 3rem;
            color: var(--primary);
            padding: 2rem 0;
        }

        #programslider {
            padding: 4rem 0;
        }

        @media (max-width:1440px) {
        #programslider {
            padding: 7rem 0;
        }
        }

        #programslider .programslider-slider {
            height: 52rem;
            padding: 2rem 0;
            position: relative;
        }

        @media (max-width:500px) {
            #programslider .programslider-slider {
                height: 45rem;
            }
        }

        .programslider-slide {
            width: 37rem;
            height: 42rem;
            position: relative;
        }

        @media (max-width:500px) {
            .programslider-slide {
                width: 28rem !important;
                height: 36rem !important;
            }
            .programslider-slide .programslider-slide-img img {
                width: 28rem !important;
                height: 36rem !important;
            }
        }

        .programslider-slide .programslider-slide-img img {
            width: 37rem;
            height: 42rem;
            border-radius: 2rem;
            object-fit: cover;
        }

        .programslider-slide .programslider-slide-content {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }

        .programslider-slide-content .programdesc .programtitle {
            position: absolute;
            top: 2rem;
            right: 2rem;
            color: var(--white);
        }

        .programslider-slide-content .programslider-slide-content-bottom {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            color: var(--white);
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
            display: none;
        }

        .programslider-slider-control {
            position: relative;
            bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .programslider-slider-control .swiper-button-next {
            left: 58% !important;
            transform: translateX(-58%) !important;
        }

        @media (max-width:990px) {
            .programslider-slider-control .swiper-button-next {
                left: 70% !important;
                transform: translateX(-70%) !important;
            }
        }

        @media (max-width:450px) {
            .programslider-slider-control .swiper-button-next {
                left: 80% !important;
                transform: translateX(-80%) !important;
            }
        }

        @media (max-width:990px) {
            .programslider-slider-control .swiper-button-prev {
                left: 30% !important;
                transform: translateX(-30%) !important;
            }
        }

        @media (max-width:450px) {
            .programslider-slider-control .swiper-button-prev {
                left: 20% !important;
                transform: translateX(-20%) !important;
            }
        }

        .programslider-slider-control .slider-arrow {
            background: var(--white);
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            left: 42%;
            transform: translateX(-42%);
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .programslider-slider-control .slider-arrow ion-icon {
            font-size: 2rem;
            color: #222224;
        }

        .programslider-slider-control .slider-arrow::after {
            content: '';
        }

        .programslider-slider-control .swiper-pagination {
            position: relative;
            width: 15rem;
            bottom: 1rem;
        }

        .programslider-slider-control .swiper-pagination .swiper-pagination-bullet {
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .programslider-slider-control .swiper-pagination .swiper-pagination-bullet-active {
            background: var(--primary);
        }
    </style>
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <div class="container-home"><!--container buat keseluruhan home-->
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>
            Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>
        <div class="quotes">
            <p style="color:black;" align="center">True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
            </p>
            <p>Menno Simmons<br/></p>
        </div>

        <!-- Our Program Section -->
        <div class="ourprogram">
            <section id="programslider">
                <div class="container-slider">
                    <h3 class="text-center section-subheading">Our Programs</h3>
                    <h1 class="text-center section-heading">We Help Those in Need</h1>
                </div>
                <div class="container-slider">
                    <div class="swiper programslider-slider">
                        <div class="swiper-wrapper">
                            <!--Slider start-->
                            <div class="swiper-slide programslider-slide">
                                <div class="programslider-slide-img">
                                    <!--buat taro img-->
                                </div>
                                <div class="programslider-slide-content">
                                    <h1 class="programtitle">Abcabhehecasajn</h1>
                                    <div class="programslider-slide-content-bottom">
                                        <h2 class="programdesc">Deskripsi Program disini</h2>
                                    </div>
                                </div>
                            </div>
                            <!--Slider end-->
                            <!--Slider start-->
                            <div class="swiper-slide programslider-slide">
                                <div class="programslider-slide-img">
                                    <!--buat taro img-->
                                </div>
                                <div class="programslider-slide-content">
                                    <h1 class="programtitle">Abcabcasajn</h1>
                                    <div class="programslider-slide-content-bottom">
                                        <h2 class="programdesc">Deskripsi Program disini</h2>
                                    </div>
                                </div>
                            </div>
                            <!--Slider end-->
                            <!--Slider start-->
                            <div class="swiper-slide programslider-slide">
                                <div class="programslider-slide-img">
                                    <!--buat taro img-->
                                </div>
                                <div class="programslider-slide-content">
                                    <h1 class="programtitle">Abcabcasajn</h1>
                                    <div class="programslider-slide-content-bottom">
                                        <h2 class="programdesc">Deskripsi Program disini</h2>
                                    </div>
                                </div>
                            </div>
                            <!--Slider end-->
                            <!--Slider start-->
                            <div class="swiper-slide programslider-slide">
                                <div class="programslider-slide-img">
                                    <!--buat taro img-->
                                </div>
                                <div class="programslider-slide-content">
                                    <h1 class="programtitle">Abcabcasajn</h1>
                                    <div class="programslider-slide-content-bottom">
                                        <h2 class="programdesc">Deskripsi Program disini</h2>
                                    </div>
                                </div>
                            </div>
                            <!--Slider end-->
                            <!--Slider start-->
                            <div class="swiper-slide programslider-slide">
                                <div class="programslider-slide-img">
                                    <!--buat taro img-->
                                </div>
                                <div class="programslider-slide-content">
                                    <h1 class="programtitle">Abcabcasajn</h1>
                                    <div class="programslider-slide-content-bottom">
                                        <h2 class="programdesc">Deskripsi Program disini</h2>
                                    </div>
                                </div>
                            </div>
                            <!--Slider end-->
                        </div>
                        <div class="programslider-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="testimoni">
            <h3 style="color: #443333;">What they say about ACM?</h3>
            <!-- Buat testimoni: kakak RBA baik-baik yaa -->
        </div>
    </div>
    <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
</x-layout>
