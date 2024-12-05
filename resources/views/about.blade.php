<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="d-flex flex-column min-vh-100" style="background-color: #fdfaf4;">
        <!-- Header -->
        <header class="bg-white py-3 shadow-sm text-center">
            <h1 class="mb-0">About</h1>
        </header>

        <main class="flex-grow-1 d-flex justify-content-center align-items-center">
            <div class="container text-center pb-2">
                <h1 class="mb-3">Meet Our Team</h1>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                @forelse ($teamMembers as $member)
                    <div class="col">
                        <div class="text-center">
                        <img 
                            src="{{ asset('storage/' . $member->member_image) }}"
                            class="rounded-circle mx-auto mb-2" 
                            alt="Profile picture of {{ $member->name }}" 
                            width="150" height="150" 
                            loading="lazy">

                            <h5 class="fw-bold mb-1">{{ $member->name }}</h5>
                        <p class="text-muted mb-0">{{ $member->role }}</p>
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
