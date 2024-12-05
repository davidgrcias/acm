<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-5">
        <a href="/" class="btn btn-primary mt-4">Back to Home</a>
        <h1 class="text-center">{{ $program->title }}</h1>
        <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}" class="img-fluid mx-auto d-block my-4" style="max-width: 800px;">
        <p class="mt-4" style="font-size: 18px;">{{ $program->description }}</p>
    </div>
</x-layout>