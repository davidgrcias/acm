<!--HOME-john-->
<x-layout>
    <x-slot:title>{{  $title }}</x-slot:title>
    <style>
        .container-fotowelcome {
            background-image: url('/images/home.jpg');
            width: 90%;
            padding: 90px;
            background-color:green; /*masih sementara, nanti ganti fotonya jd background*/
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
        a hover{
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
        }
    </style>
    <div class="container-home">
        <div class="container-fotowelcome">
            <h3>Welcome to<br/>ARK Care Ministry!</h3>
            <p>Gloria dei homo vivens<br/>
            Seeking the peace and prosperity of the city</p><br/>
            <a href="/about" class="tombol-about">About Us</a>
        </div>
        <div class="quotes" align="center">
            <p>True Evangelical faith, cannot lie dormant, it clothes the naked, it feeds the hungry
                it comforts the sorrowful, it shelters the destitute, it serves those that harm, it binds 
                up that which is wounded, it has become all things to all creatures
                <br/><br/>
                Menno Simmons<br/>
            </p>
        </div>
    </div>
</x-layout>