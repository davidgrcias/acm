 <style>
        /* Perbaikan grid Meet Our Team */
        .team-container {
            display: grid;
            gap: 1rem;
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

    <div class="container mt-5">
        <h1 class="mb-3">Meet Our Team</h1>
        <div class="team-container">
            @forelse ($teamMembers as $member)
                <div class="text-center">
                    <img
                        src="{{ asset('storage/app/public/' . $member->member_image) ?: asset('templateUSER/images/portrait-volunteer-who-organized-donations-charity.jpg') }}"
                        class="rounded-circle mx-auto mb-2"
                        alt="Profile picture of {{ $member->name }}"
                        width="200"
                        height="200"
                        loading="lazy">
                    <h4 class="fw-bold mb-1">{{ $member->name }}</h4>
                    <h6 class="text-muted mb-0">{{ $member->role }}</h6>
                </div>
            @empty
                <p class="text-center">No team members available at the moment.</p>
            @endforelse
        </div>
    </div>

