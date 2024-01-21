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
                <h1 class="home__title" style="margin-bottom: 50px">Design Amazing Packaging</h1>
                <h2 class="home__description">Use <a href="">BOXIFY</a>'s AI-powered platform to create various types of mockups and bring your packaging to life</h2>
            </div>
            <form action="{{ route('feature.packaging.generate') }}" method="post">
                @csrf
                <input type="text" class="input" placeholder="Enter your company name" name="companyName">
                <button class="button">Get Started</button>
            </form>
        </div>
    </section>
    <section class="container">
        <h1 class="home__title" style="margin-bottom: 50px">Create Packaging Like This In Seconds</h1>
        <div class="grid">
            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/6wwYJtEw2Dlr56fXsSPhOCePuR8.jpeg?scale-down-to=512"
                >
                <h3>Joice Can</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/3FmNYd24Pfgji5wiwJIlyIYWVmQ.jpeg?scale-down-to=512"
                >
                <h3>Ice Cream Cup</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/bMfNUrKlCn4UwunQhbd9TkL50.jpeg?scale-down-to=512"
                >
                <h3>Pet Snack</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/ukiuWOsPVCw9r15MCTEwH5dmTjQ.jpeg?scale-down-to=512"
                >
                <h3>Beauty Product</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/Fp8oxYm4o6eENsOlRJMKez9pI.png?scale-down-to=512"
                >
                <h3>Coffee Bean</h3>
            </div>

            <div style="padding: 10px">
                <img
                    style="border-radius: 10px;"
                    width="400px"
                    height="400px"
                    src="https://framerusercontent.com/images/nXb9PKaWuefxGTcOtdT42P8.jpg?scale-down-to=512"
                >
                <h3>Bath Bomb</h3>
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
