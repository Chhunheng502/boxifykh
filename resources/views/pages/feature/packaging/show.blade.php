@extends('layout.master')

@section('css')
    <style>
        /* Add your CSS styling here */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            /* Adjust the gap according to your preference */
        }

        .grid .steps__card {
            border: 1px solid #ccc;
            /* Add a border for better visibility */
            padding: 20px;
            border-radius: 10px;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        #logo_01 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-60%, -140%) rotateX(0deg) rotateY(0deg) rotateZ(-5deg); /* Initial rotation values */
            mix-blend-mode: multiply;
            opacity: 0.5;
        }

        #text_01 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-60%, -80%) rotateX(0deg) rotateY(0deg) rotateZ(-5deg); /* Initial rotation values */
            font-size: 16px;
            mix-blend-mode: multiply;
            opacity: 0.5;
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); */
        }
        
        #logo_02 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(0%, -240%) rotateX(0deg) rotateY(0deg) rotateZ(5deg); /* Initial rotation values */
            mix-blend-mode: multiply;
            opacity: 0.5;
        }

        #text_02 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(0%, -280%) rotateX(0deg) rotateY(0deg) rotateZ(5deg); /* Initial rotation values */
            font-size: 18px;
            mix-blend-mode: multiply;
            opacity: 0.5;
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); */
        }

        #logo_03 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-40%, -140%) rotateX(0deg) rotateY(0deg) rotateZ(-3deg); /* Initial rotation values */
            mix-blend-mode: multiply;
            opacity: 0.5;
        }

        #text_03 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-40%, -80%) rotateX(0deg) rotateY(0deg) rotateZ(-3deg); /* Initial rotation values */
            font-size: 18px;
            mix-blend-mode: multiply;
            opacity: 0.5;
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); */
        }
    </style>
@endsection

@section('content')
    <section class="home container">
        <h1 class="home__title">Design Your Own Packaging</h1>
        <div class="grid">
            {{-- @foreach ($fileNames as $fileName)                
                <div style="padding: 10px">
                    <img
                        style="border-radius: 10px;"
                        width="400px"
                        height="400px"
                        src="{{ asset('IMG/PACKAGE/'.$fileName) }}"
                    >
                </div>
            @endforeach --}}
            <div style="position: relative">
                <div class="image-container">
                    <img id="main-image" src="{{ asset('BOX/carton-box.jpg') }}" alt="Main Image">
                    <div>
                        <img id="logo_01" src="{{ asset('ICON/abstract-shape_5969842.png') }}" alt="Logo" width="50" height="50">
                        <div id="text_01">{{ $companyName }}</div>
                    </div>
                </div>
            </div>
            <div class="image-container">
                <img id="main-image" src="{{ asset('BOX/open-white-box.jpg') }}" alt="Main Image">
                <div>
                    <img id="logo_02" src="{{ asset('ICON/pie-chart_9521469.png') }}" alt="Logo" width="60" height="60">
                    <div id="text_02">{{ $companyName }}</div>
                </div>
            </div>
            <div class="image-container">
                <img id="main-image" src="{{ asset('BOX/tall-white-box.jpg') }}" alt="Main Image">
                <div>
                    <img id="logo_03" src="{{ asset('ICON/slack_3820314.png') }}" alt="Logo" width="60" height="60">
                    <div id="text_03">{{ $companyName }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="{{ asset('JS/main.js') }}"></script>
@endsection
