<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <style>
        body{
            background-color: #FFFBF4;
        }
        .activity-container {
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
        }

        .NewsTitle {
            margin-bottom: 20px;
            font-size: 3vw;
        }

        .NewsImg {
            border-radius: 15px;
            width: 1000px;
            height: auto;
        }

        .NewsText {
            margin-top: 70px;
            margin-left: 40px;
            margin-bottom: 100px;
        }

        @media (max-width: 1280px) {
            .NewsTitle {
                font-size: 3vw;
            }

            .NewsImg {
                width: 700px;
                height: auto;
            }

            .NewsText {
                margin-left: 10px;
            }
        }

        @media (max-width: 768px) {
            .NewsTitle {
                font-size: 3vw;
            }

            .NewsImg {
                width: 400px;
                height: auto;
            }
        }

        @media (max-width: 480px) {
            .NewsTitle {
                font-size: 3vw;
            }

            .NewsImg {
                width: 200px;
                height: auto;
            }

            .NewsText {
                margin-left: 10px;
            }
        }

        .back-button {
        margin-left: 40px;
        border-radius: 5px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        background-color: #B3A7A8;
        border-radius : 5px;
        border: none;
        cursor: pointer;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
</style>


    <a href="{{ url()->previous() }}">
        <button class="back-button">Back</button>
    </a>
    <div class="activity-container">
        <h1 class="text-white NewsTitle">{{ $activities->title }}</h1>
        
        @isset($activities->cover_image)
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $activities->cover_image) }}" alt="{{ $activities->title }}" class="img-fluid rounded-circle NewsImg">
            </div>
        @endisset
    </div>

    <p class="text-white NewsText">{{ $activities->text }}</p>
</x-layout>
