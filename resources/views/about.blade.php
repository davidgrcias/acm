<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
<style>
    :root {
        overflow-x: hidden;
    }
    .about-img img {
    transition: .5s;
    padding: 1rem;
}
    .imgKiri img:hover {
    background: #E6252C !important;
}
    .imgKanan img:hover {
    background: #90C63E !important;
}
    .about-img .text-start {
    margin-top: -150px;
    padding-left: 4rem;
    padding-top: 1rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 4rem; 
    padding-top: 1rem;
}

/* Container styling */
.judul-visi {
    background-color: #E6252C; /* Red header background */
    color: white;
    padding: 10px 20px; /* Padding for the header */
    border-radius: 30px;
    font-family: Arial, sans-serif; /* Font style */
    font-weight: bold;
    box-shadow: 0px 6px 5px rgba(0, 0, 0, 0.262);
}

.judul-visi h3 {
    color: white;
    text-align: left;
    padding-left: 30px;
}

.body-visi {
    background-color: #fddada; /* Light pink body background */
    padding: 20px; /* Padding for body content */
    border-radius: 15px; /* Rounded corners for the body */
    box-shadow: 1px 8px 15px 1px rgba(0, 0, 0, 0.262);
}

/* List styling */
.body-visi ul {
    margin: 0; /* Remove margin */
    padding-left: 20px; /* Indent the list */
    list-style-position: inside; /* Position numbers inside the body */
    padding-top: 25px;
    padding-bottom: 25px;
}

.body-visi ul li {
    color: #b22222; /* Slightly darker red for list text */
    font-size: 16px; /* Adjust font size */
    line-height: 1.6; /* Line spacing */
    list-style: none;
    text-align: left;
    font-weight: 600;
    font-size: 150%;
}

/* Title (Judul Misi) styling */
.judul-misi {
    background-color: #90C63E; /* Green background */
    padding: 10px 20px; /* Add some padding */
    border-radius: 25px;
    font-family: Arial, sans-serif; /* Font style */
    font-weight: bold;
    box-shadow: 0px 6px 5px rgba(0, 0, 0, 0.262);
}

.judul-misi h3 {
    color: white;
}

/* Body (Body Misi) styling */
.body-misi {
    background-color: #90c63e54; /* Light green background */
    padding: 20px; /* Add padding */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 1px 8px 15px 1px rgba(0, 0, 0, 0.262);
    display: block;
}

/* List styling */
.body-misi ul {
    margin: 0; /* Remove default margin */
    padding-left: 20px; /* Indent list items */
    list-style-position: inside; /* Align numbers inside the box */
    padding-top: 25px;
    padding-bottom: 25px;
}

.body-misi ul li {
    color: #466E08; /* Darker green for list items */
    font-size: 16px; /* Font size */
    line-height: 1.6; /* Adjust line height */
    list-style: none;
    text-align: left;
    font-weight: 600;
    font-size: 150%;
}



/* Default styles for larger screens */
.besar {
    max-width: 300px;
    min-width: 300px;
    max-height: 300px;
    min-height: 300px;
    object-fit: cover;
    border-radius: 50%; /* Ensure circular images */
}

.kecil {
    max-width: 230px;
    min-width: 230px;
    max-height: 230px;
    min-height: 230px;
    object-fit: cover;
    border-radius: 50%;
}


@media (max-width: 1400px) {
    .besar {
        max-width: 290px;
        min-width: 290px;
        max-height: 290px;
        min-height: 290px;
    }

    .kecil {
        max-width: 220px;
        min-width: 220px;
        max-height: 220px;
        min-height: 220px;
    }

    .about-img .text-start {
    margin-top: -150px;
    padding-left: 2rem;
    padding-top: 1rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 2rem; 
    padding-top: 1rem;
}
}

@media (max-width: 1250px) {
    .besar {
        max-width: 280px;
        min-width: 280px;
        max-height: 280px;
        min-height: 280px;
    }

    .kecil {
        max-width: 210px;
        min-width: 210px;
        max-height: 210px;
        min-height: 210px;
    }
    .about-img img {
    padding: 0.8rem;
}
}

@media (max-width: 1200px) {
    .besar {
        max-width: 280px;
        min-width: 280px;
        max-height: 280px;
        min-height: 280px;
    }

    .kecil {
        max-width: 210px;
        min-width: 210px;
        max-height: 210px;
        min-height: 210px;
    }
    .about-img img {
    padding: 0.8rem;
}
}

@media (max-width: 1050px) {
    .about-img img {
    padding: 0.6rem;
}
    .besar {
        max-width: 270px;
        min-width: 270px;
        max-height: 270px;
        min-height: 270px;
    }

    .kecil {
        max-width: 200px;
        min-width: 200px;
        max-height: 200px;
        min-height: 200px;
    }

    .about-img .text-start {
    margin-top: -150px;
    padding-left: 0rem;
    padding-top: 1rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 0rem; 
    padding-top: 1rem;
}
}

/* Adjustments for medium screens (tablets, 768px and above) */
@media (max-width: 992px) {
    .about-img img {
    padding: 0.6rem;
}
    .besar {
        max-width: 250px;
        min-width: 250px;
        max-height: 250px;
        min-height: 250px;
    }

    .kecil {
        max-width: 180px;
        min-width: 180px;
        max-height: 180px;
        min-height: 180px;
    }

    .about-img .text-start {
    margin-top: -150px;
    padding-left: 15rem;
    padding-top: 1rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 15rem; 
    padding-top: 1rem;
}
}

/* Adjustments for small screens (mobile devices, 576px and above) */
@media (max-width: 768px) {
    .about-img img {
    padding: 0.4rem;
}
    .besar {
        max-width: 200px;
        min-width: 200px;
        max-height: 200px;
        min-height: 200px;
    }

    .kecil {
        max-width: 130px;
        min-width: 130px;
        max-height: 130px;
        min-height: 130px;
    }
    .about-img .text-start {
    margin-top: -150px;
    padding-left: 11rem;
    padding-top: 3rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 11rem; 
    padding-top: 3rem;
}
}

/* Adjustments for extra small screens (phones, <576px) */
@media (max-width: 576px) {
    .about-img img {
    padding: 0.2rem;
}
    .besar {
        max-width: 150px;
        min-width: 150px;
        max-height: 150px;
        min-height: 150px;
    }

    .kecil {
        max-width: 120px;
        min-width: 120px;
        max-height: 120px;
        min-height: 120px;
    }
    .about-img .text-start {
    margin-top: -150px;
    padding-left: 7.7rem;
    padding-top: 5rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 7.7rem; 
    padding-top: 5rem;
}
}

@media (max-width: 500px) {
    .about-img img {
    padding: 0.2rem;
}
    .besar {
        max-width: 150px;
        min-width: 150px;
        max-height: 150px;
        min-height: 150px;
    }

    .kecil {
        max-width: 120px;
        min-width: 120px;
        max-height: 120px;
        min-height: 120px;
    }
    .about-img .text-start {
    margin-top: -150px;
    padding-left: 5rem;
    padding-top: 5rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 5rem; 
    padding-top: 5rem;
}
}

@media (max-width: 400px) {
    .about-img img {
    padding: 0.2rem;
}
    .besar {
        max-width: 150px;
        min-width: 150px;
        max-height: 150px;
        min-height: 150px;
    }

    .kecil {
        max-width: 120px;
        min-width: 120px;
        max-height: 120px;
        min-height: 120px;
    }
    .about-img .text-start {
    margin-top: -150px;
    padding-left: 3.5rem;
    padding-top: 5rem;
}
    .about-img .text-end {
    margin-top: -150px; 
    padding-right: 3.5rem; 
    padding-top: 5rem;
}
}

</style>
    <div class="d-flex flex-column min-vh-100" style="background-color: #fdfaf4;">
        <!-- Header -->
        <header class="bg-FFFBF4 text-center" id = "header">
            <h1 class="mt-5">Sejarah ARK Care Ministry</h1>
        </header>
        <main class="flex-grow-1 d-flex justify-content-center align-items-center">
            <div class="container text-center pb-2">

                @foreach ($history as $historic)
                <div class="row g-5 align-items-center">
                    @if ($historic->order % 2 == 0)
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s" style="padding-left: 4rem;">
                        <p style="text-align: right;">{{ $historic->content }}</p>
                    </div>
                    <div class="col-lg-5 about-img wow fadeInUp imgKiri" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light besar" src="{{ asset('storage/' . $historic->image_one) }}" alt="foto satu">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/' . $historic->image_two) }}" alt="foto dua">
                            </div>
                            <div class="col-6 text-end" style="">
                                <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/' . $historic->image_three) }}" alt="foto tiga">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-5 about-img wow fadeInUp imgKanan" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light besar" src="{{ asset('storage/' . $historic->image_one) }}" alt="foto satu">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/' . $historic->image_two) }}" alt="foto dua">
                            </div>
                            <div class="col-6 text-end" style="">
                                <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/' . $historic->image_three) }}" alt="foto tiga">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s" style="padding-right: 4rem">
                        <p style="text-align: left;">{{ $historic->content }}</p>
                    </div>
                    @endif
                </div>
                @endforeach

                <div class="row mt-5">
                    <div class="col">
                        <div class="judul-visi mb-3 col-lg-6">
                            <h3>Visi (Vision)</h3>
                        </div>
                        <div class="body-visi">
                            <ul>
                                @if ($visi->isEmpty())
                                <li>Tidak ada visi</li>
                            @else
                                @foreach ($visi as $vision)
                                    <li>{{ $vision->number }}. {{ $vision->content }}</li>
                                @endforeach
                            @endif
                            </ul>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <div class="d-flex flex-column-reverse flex-lg-row justify-content-between align-items-start">
                                <div class="col-lg-6"></div>
                                <div class="judul-misi col-lg-6 text-lg-end mb-3">
                                    <h3>Misi (Mission)</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="body-misi col-lg-12">
                                <ul>
                                    @if ($misi->isEmpty())
                                        <li>Tidak ada misi</li>
                                    @else
                                        @foreach ($misi as $mission)
                                            <li>{{ $mission->number }}. {{ $mission->content }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    

                <h1 class="mb-3 mt-5">Meet Our Team</h1>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    @forelse ($teamMembers as $member)
                        <div class="col">
                            <div class="text-center">
                                <img 
                                    src="{{ asset('storage/' . $member->member_image) ?: asset('templateUSER/images/portrait-volunteer-who-organized-donations-charity.jpg') }}" 
                                    class="rounded-circle mx-auto mb-2" 
                                    alt="Profile picture of {{ $member->name }}" 
                                    width="300" height="300" 
                                    loading="lazy">
                                <h4 class="fw-bold mb-1">{{ $member->name }}</h4>
                                <h6 class="text-muted mb-0">{{ $member->role }}</h6>
                            </div>
                        </div>
                    @empty
                    <div class="col-lg-12">
                        <p style="text-align: center;">No team members available at the moment.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </main>

    </div>
</x-layout>
