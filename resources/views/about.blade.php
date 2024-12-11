<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
<style>
    .about-img img {
    transition: .5s;
}
    .about-img img:hover {
    background: red !important;
}
</style>
    <div class="d-flex flex-column min-vh-100" style="background-color: #fdfaf4;">
        <!-- Header -->
        <header class="bg-FFFBF4 py-3 text-center">
            <h1 class="mt-5">Sejarah ARK Care Ministry</h1>
        </header>
        <main class="flex-grow-1 d-flex justify-content-center align-items-center">
            <div class="container text-center pb-2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('templateUSER/images/sl.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('templateUSER/images/sl.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('templateUSER/images/sl.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="mb-3">Meet Our Team</h1>

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
                        <p class="text-center">No team members available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </main>

    </div>
</x-layout>
