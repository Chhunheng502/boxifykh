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
    </style>
@endsection

@section('content')
    <section class="home container">
        <h1 class="home__title">Design Your Own Brand Identity</h1>
        <div class="grid">
            @foreach ($fileNames as $fileName)                
                <div style="padding: 10px">
                    <img
                        style="border-radius: 10px;"
                        width="400px"
                        height="400px"
                        src="{{ secure_asset('IMG/LOGO/'.$fileName) }}"
                    >
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('js')
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="{{ secure_asset('JS/main.js') }}"></script>
@endsection
