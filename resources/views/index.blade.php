<!--HOME-john-->
<x-layout>
    <x-slot:title>{{  $title }}</x-slot:title>
    <style>
        .container-fotowelcome {
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
        a:hover{
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
            margin-left:auto;
            margin-right:auto;
        }
        .ourprogram{
            background-color: #443333;
            align-items: center;
            align-text:center;
            padding-top: 30px;
            padding-bottom:30px;
        }
        .ourprogram h3, h6{
            text-align: center;
        }
    </style>
    <div class="container-home">
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>
            Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>
        <div class="quotes">
            <p style="color:black;" align="center">True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
            </p>
            <p>Menno Simmons<br/></p>
        </div>

        <!-- Our Program Section -->
        <div class="ourprogram">
            <h3 class="text-4xl font-bold text-white mb-4">Our Program</h3>
            <h6 class="text-xl mb-12" style="color: #FFAB23;">We help those in need</h6>

            <div class="flex items-center justify-center gap-8">
                @foreach ($programs as $program)
                <div class="bg-white rounded-2xl overflow-hidden w-[300px] h-[400px] shadow-lg">
                    <div class="relative h-1/2">
                        @if ($program->image)
                            <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" class="w-full h-full object-cover" />
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-500 text-4xl font-bold">
                                No Image
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-2">{{ $program->title }}</h4>
                        <p class="text-gray-600 text-sm line-clamp-3">{{ $program->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
