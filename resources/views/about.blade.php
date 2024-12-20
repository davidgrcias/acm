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

    .body-misi {
        background-color: #90c63e54; /* Light green background */
        padding: 20px; /* Add padding */
        border-radius: 15px; /* Rounded corners */
        box-shadow: 1px 8px 15px 1px rgba(0, 0, 0, 0.262);
        display: block;
    }

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

    .besar {
        max-width: 300px;
        min-width: 300px;
        max-height: 300px;
        min-height: 300px;
        object-fit: cover;
        border-radius: 50%;
    }

    .kecil {
        max-width: 230px;
        min-width: 230px;
        max-height: 230px;
        min-height: 230px;
        object-fit: cover;
        border-radius: 50%;
    }

    /* Perbaikan grid Meet Our Team */
    .team-container {
        display: grid;
        gap: 1.5rem;
        padding: 20px;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        justify-items: center;
    }

    .team-container img {
        width: 100%;
        max-width: 250px;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .team-container img:hover {
        transform: scale(1.05);
    }

    .team-container h4, .team-container h6 {
        margin: 0;
    }

    .team-member {
        text-align: center;
    }

    @media (min-width: 576px) {
        .team-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 768px) {
        .team-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (min-width: 992px) {
        .team-container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /* Bagian sejarah (history) */
    .row.g-5 {
        margin: 0 auto;
        max-width: 1200px;
    }

    @media (max-width: 576px) {
        .about-img .text-start {
            padding-left: 1rem;
        }

        .about-img .text-end {
            padding-right: 1rem;
        }
    }

    /* Penyesuaian Visi & Misi */
    .judul-visi, .judul-misi {
        margin: 0 auto;
        max-width: 600px;
    }

    .body-visi, .body-misi {
        margin: 0 auto;
        max-width: 700px;
    }
    
</style>

<div class="d-flex flex-column min-vh-100" style="background-color: #fdfaf4;">
    <header class="bg-FFFBF4 text-center" id="header">
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
                            <img class="img-fluid w-75 rounded-circle bg-light besar" src="{{ asset('storage/app/public/' . $historic->image_one) }}" alt="foto satu">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/app/public/' . $historic->image_two) }}" alt="foto dua">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/app/public/' . $historic->image_three) }}" alt="foto tiga">
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-5 about-img wow fadeInUp imgKanan" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light besar" src="{{ asset('storage/app/public/' . $historic->image_one) }}" alt="foto satu">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/app/public/' . $historic->image_two) }}" alt="foto dua">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100 rounded-circle bg-light kecil" src="{{ asset('storage/app/public/' . $historic->image_three) }}" alt="foto tiga">
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
                            <li>Mengembangkan kepedulian terhadap sesama dengan pelayanan kasih.</li>
                            <li>Memperlengkapi jemaat untuk melayani komunitas secara holistik.</li>
                            <li>Mewujudkan masyarakat yang saling mendukung dalam kasih Kristus.</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="judul-misi mb-3 col-lg-6">
                        <h3>Misi (Mission)</h3>
                    </div>
                    <div class="body-misi">
                        <ul>
                            <li>Melayani kebutuhan fisik, emosional, dan spiritual.</li>
                            <li>Menyediakan program-program pengembangan masyarakat.</li>
                            <li>Menjalin hubungan erat antara jemaat dan komunitas sekitar.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h1 class="mb-3">Meet Our Team</h1>

<div class="team-container">
    @forelse ($teamMembers as $member)
        <div class="team-member">
            <img 
                src="{{ asset('storage/' . $member->member_image) ?: asset('templateUSER/images/portrait-volunteer-who-organized-donations-charity.jpg') }}" 
                alt="Profile picture of {{ $member->name }}"
                loading="lazy">
            <h4 class="fw-bold mb-1">{{ $member->name }}</h4>
            <h6 class="text-muted mb-0">{{ $member->role }}</h6>
        </div>
    @empty
        <div class="col-lg-12">
            <p style="text-align: center;">No team members available at the moment.</p>
        </div>
    @endforelse
</div>
            
        </div>
    </main>
    <footer class="text-center py-3">
        <p>&copy; 2024 ARK Care Ministry. All rights reserved.</p>
    </footer>
</div>
</x-layout>
