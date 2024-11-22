<x-layout>
    <x-slot:title>Home</x-slot:title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero {
            position: relative;
            background: url('{{ asset('uploads/Indonesia.jpeg') }}') no-repeat center center/cover;
            height: 400px;
            border-radius: 15px; 
            margin: 0 20px; 
            margin-top: 20px;
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Overlay semi-transparan */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: left; /* Teks rata kiri */
            color: white;
            padding: 40px; /* Memberikan ruang di sekitar teks */
        }

        .hero-content h2 {
            font-size: 1.5em;
            color: #28a745; /* Warna hijau untuk teks Ark Care Ministry */
            margin-bottom: 10px;
        }

        .hero-content h1 {
            font-size: 3em;
            font-weight: bold;
            margin: 0;
        }

        .hero-content p {
            font-size: 1.2em;
            margin: 10px 0 20px;
        }

        .hero-content button {
            background-color: #d9534f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .hero-content button:hover {
            background-color: #c9302c;
        }

        .quote-section {
            background: #fff;
            padding: 30px 20px;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .quote-section p {
            font-size: 1.1em;
            color: #444;
            margin: 10px 0;
        }

        .quote-section .author {
            margin-top: 15px;
            font-style: italic;
            color: #777;
        }
    </style>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h2>Ark Care Ministry</h2>
            <h1>Welcome to ACM!</h1>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
            <a href="{{ url('/about') }}">
                <button>About us</button>
            </a>            
        </div>
    </div>

    <!-- Quote Section -->
    <div class="quote-section">
        <p>True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry, it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds up that which is wounded, it has become all things to all creatures.</p>
        <p class="author">- Menno Simmons</p>
    </div>
</x-layout>
