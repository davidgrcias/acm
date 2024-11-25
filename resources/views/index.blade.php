<!--HOME-john-->
<x-layout>
    <x-slot:title>{{  $title }}</x-slot:title>
    <style>
        .container-fotowelcome {
            /*background-image: url('../Resources/');*/
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
        a hover{
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
        }
    </style>
    <div class="container-home">
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>
            Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>
        <div class="quotes" align="center">
            <p style="color:black;">True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
            </p>
            <p>Menno Simmons<br/></p>
        </div>
        <!--yg carousel sampe join us dah sama nanda-->
        <div class="ourprogram">
            <h3>Our Program</h3>
            <h6>We help those in need</h6>
            <div class="beritaourprogram">
                <div id="newsCarousel" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        @php $i = 0; @endphp
                        @foreach ($fillables as $fillable)
                            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                <div class="news-content">
                                    <img src="{{ asset($newsItem->photo) }}" class="d-block w-100" alt="{{ $newsItem->title }}">
                                    <h4>{{ $newsItem->title }}</h4>
                                    <p>{{ $newsItem->description }}</p>
                                </div>
                            </div>
                            @php $i++; @endphp
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#newsCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#newsCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>  
    </div>
</x-layout>