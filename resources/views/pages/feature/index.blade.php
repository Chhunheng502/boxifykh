@extends('layout.master')

@section('css')
    <style>
        /* Add your CSS styling here */
        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
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
    <section class="steps section container">
        <div class="steps__bg">

            <div class="steps__container grid">
                <div class="steps__card">
                    <img
                        style="border-radius: 10px; margin-left: 130px "
                        width="80px"
                        src="https://framerusercontent.com/images/gDSE9WexiptTdqZb09uR0lRtVvw.svg"
                    >
                    <h3
                        style="margin-left: 80px"
                        class="steps__card-title"
                    >Brand Identity Design</h3>
                    <p
                        style="margin-right: 20px"
                        class="steps__card-description"
                    >
                        It encompasses all your graphic design decisions that define a brand, including logo, color palette,
                        business cards and other marketing materials.
                    </p>
                    <br>
                    <a
                        class="Linked"
                        href="{{ route('feature.brand') }}"
                    >Les`s go</a>
                </div>

                <div
                    style="margin-lefr: 70px;"
                    class="steps__card"
                >
                    <img
                        style="border-radius: 10px; margin-left: 130px  "
                        width="80px"
                        src="https://framerusercontent.com/images/UHTn9M8BjEBCtH0VBEWwQ8Pu2s.svg"
                    >
                    <h3
                        style="margin-left: 95px"
                        class="steps__card-title"
                    >Packaging Design</h3>
                    <p class="steps__card-description">
                        Give your packaging design the extra push it needs with our software. Quickly and easily design in
                        3D, create product mockups with realistic renderings.
                    </p>
                    <br>
                    <a
                        style=""
                        class="Linked"
                        href="{{ route('feature.packaging') }}"
                    >Les`s go</a>
                </div>

                <div class="steps__card">
                    <img
                        style="border-radius: 10px;margin-left: 130px "
                        width="80px"
                        src="https://framerusercontent.com/images/S9Gstq1QLoTBw9ItIxQqrfFkAYo.svg"
                    >
                    <h3
                        style="margin-left: 80px"
                        class="steps__card-title"
                    >Design Consultation</h3>
                    <p class="steps__card-description">
                        Our in-house designers are our most important assets. With their experience and talents, you will
                        undoubtedly obtain useful design tips for your business.
                    </p>
                    <a
                        class="Linked"
                        href="{{ route('chatbox.index') }}"
                    >Les`s go</a>

                </div>

                <div class="steps__card">
                    <img
                        style="border-radius: 10px;margin-left: 130px "
                        width="80px"
                        src="https://framerusercontent.com/images/x79ocPaVHspU83OlaJE91IAvk.svg"
                    >
                    <h3
                        style="margin-left: 80px ; font-size: 14px"
                        class="steps__card-title"
                    >Special Customization</h3>
                    <p class="steps__card-description">
                        We provide design customization service in order to match the desired tone and the unique style of
                        your brands. However, additional charges will be processed.
                    </p>
                    <a
                        class="Linked"
                        href=""
                    >Les`s go</a>
                </div>
            </div>
        </div>
    </section>
    <section
        class="home"
        id="home"
    >
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">We Are Seeking Partnership</h1>
                <h2 class="home__subtitle">Are you offering printing services? Cooperate with us to gain more clients and
                    boost your profit!</h2>
                <a
                    href="#"
                    class="button"
                >Join Us Now</a>
            </div>

            <img
                width="150%"
                src="https://framerusercontent.com/images/xPwNuJOxai4LUf7nvImRgFDdSIU.jpg?scale-down-to=1024"
                alt=""
                class="home__img"
            >
        </div>
    </section>
@endsection

@section('js')
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="{{ secure_asset('JS/main.js') }}"></script>
@endsection
