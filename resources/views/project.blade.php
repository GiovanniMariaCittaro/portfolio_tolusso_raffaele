<x-layout>
    <x-slot name="title">{{$game['name']}}</x-slot>

    
    <!-- Navbar Inizio -->
    <nav class="w-100 fixed-top light-purple-background shadow-lg">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col"><a href="{{route('home')}}" class="text-decoration-none text-white d-flex align-items-center fs-5"><i class="bi bi-arrow-counterclockwise fs-3 m-2"></i> Home</a></div>
                <div class="col d-none d-md-flex align-items-center justify-content-end">
                    <div class="text-end me-3 fs-4 text-white">
                        <img src="{{$game['img']}}" alt="" class="project-navbar-img shadow-lg rounded-circle mx-2">
                        {{$game['name']}}
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar Fine -->

    <div class="container-fluid purple-background mt-5 pt-5">
        <h1 class="text-center text-white title mt-4 {{($game['type'] == 'mobile') ? 'mb-5' : ''}}">{{$game['name']}}</h1>
        <div class="row {{$game['type']}}-container {{($game['type'] == 'mobile') ? 'flex-column flex-sm-row' : ''}}  pt-5">
            <div class="col{{($game['type']=='computer') ? '-12' : ''}} {{$game['type']}} d-flex justify-content-center position-relative">
                @if ($game['type'] == 'mobile')
                <img class="{{$game['type']}}-img position-absolute" {{($game['name'] == 'Place Memory') ? 'id= place-memory' : ''}} src="/img/{{$game['type']}}.png" alt="">
                @endif
                <video class="{{$game['type']}}-video rounded {{($game['type'] == 'computer') ? 'shadow-lg' : ''}}" autoplay muted loop controls>
                    <source src="{{$game['video']}}" type="video/mp4">
                </video>
            </div>
            <div class="col {{($game['type'] == 'computer') ? 'section-background px-3 px-md-5 mx-5 py-3' : 'mt-5 ps-sm-0 mb-sm-4'}}  text-white fs-4 text-center lh-lg d-flex align-items-center {{$game['type']}}-description">
                {{$game['description']}}
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-5 mt-5">
            <button class="btn btn-success fs-2 py-2 px-3">
                <a href="{{$game['download']}}" class="text-decoration-none text-white" target="_blank">Download</a>
            </button>
        </div>
        @if ($game['contributions'] != [])
        <div class="row pb-5">
            <div class="col-12 text-center text-white fs-1 contributions">
                Contributions
            </div>
            @foreach ($game['contributions'] as $contribution)
            <div class="col-12 ps-4 mt-4 text-center text-white fs-5 contribution">
                {{$contribution}}
            </div>
            @endforeach
        </div>
        @endif
    </div>




</x-layout>