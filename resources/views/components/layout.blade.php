<x-header>{{ $title }}</x-header>

<body id="section_1">
<x-navbar></x-navbar>

    <main>
        {{ $slot }}
    </main>

<x-footer></x-footer>