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

        .input {
            min-width: 800px;
            height: 60px;
            background-color: #05060f0a;
            border-radius: .5rem;
            padding: 0 1rem;
            border: 2px solid transparent;
            font-size: 1rem;
            transition: border-color .3s cubic-bezier(.25,.01,.25,1) 0s, color .3s cubic-bezier(.25,.01,.25,1) 0s,background .2s cubic-bezier(.25,.01,.25,1) 0s;
        }
        
        .label {
            display: block;
            margin-bottom: .3rem;
            font-size: .9rem;
            font-weight: bold;
            color: #05060f99;
            transition: color .3s cubic-bezier(.25,.01,.25,1) 0s;
        }
        
        .input:hover, .input:focus, .input-group:hover .input {
            outline: none;
            border-color: #05060f;
        }
        
        .input-group:hover .label, .input:focus {
            color: #05060fc2;
        }
    </style>
@endsection

@section('content')
    <section class="home">
        <div class="home__container" style="text-align: center">
            <div style="margin-bottom: 50px">
                <h1 class="home__title" style="margin-bottom: 50px">Design Your Own Brand Identity</h1>
                <h2 class="home__description">Use <a href="">BOXIFY</a>'s AI-powered platform to design a logo along with brand kit and marketing materials</h2>
            </div>
            <form action="{{ route('feature.brand.generate') }}" method="post">
                @csrf
                <input type="text" class="input" placeholder="Enter your company name" name="companyName">
                <button type="submit" class="button">Get Started</button>
            </form>
            <form>
            </div>
        </div>
    </section>
    <section class="container">
        <h1 class="home__title" style="margin-bottom: 50px">Create Logos Like This In Seconds</h1>
        <div class="grid">
            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/KLHiXcbLf8IAEizP4auGQGJ7k.svg"
                >
                <h3>Coffee Shop</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/iQBLXr2tMw5fqu8dUzMY2LCTok.svg"
                >
                <h3>Interior Design</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/VZcUuc31SKTc8MDF9EbhnXzMZw.svg"
                >
                <h3>Clothing Brand</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/xN6gcACzmbyL7Kdt4wZQ7PMGBYQ.svg"
                >
                <h3>Creative Agency</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/IzkALNq8inuS9MsYaMWgwOxQnY.svg"
                >
                <h3>Bakery</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/DXpuiXqTSyQoaQhWHTmpBOcI4Uk.svg"
                >
                <h3>Plant Store</h3>
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
