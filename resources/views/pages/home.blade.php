@extends('layout.master')

@section('content')
    <main class="l-main">
        <!--========== HOME ==========-->
        <section
            class="home"
            id="home"
        >
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">Expert Branding and Packaging Services</h1>
                    <h2 class="home__subtitle">Create a powerful brand identity and packaging for your SME with <span
                            style="color:rgb(82, 146, 255)"
                        >BOXIFY</span> – the platform that helps you stand out in the market</h2>
                    <a
                        href="{{ route('pages.feature') }}"
                        class="button"
                    >Start Designing</a>
                </div>

                <video
                    width="500px"
                    src="https://framerusercontent.com/modules/assets/OslQFHmr9e5HsqQHKU2wbCowQ~F31GFZZCPCFn3617je1OLSwENLjl29qb91dUgozPlp8.mp4"
                    class="home__img"
                    loop
                    autoplay
                    muted
                ></video>
            </div>
        </section>


        <!--========== ABOUT ==========-->
        <section
            class="about section bd-container"
            id="about"
        >
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <h2 class="section-title about__initial">Brand Identity <br> Design</h2>
                    <p class="about__description">Utilizing AI, <span style="color:rgb(82, 146, 255)"> BOXIFY </span> is
                        able to craft a unique brand identity that accurately represents your business, ensuring brand
                        consistency and recognition.</p>
                    <a
                        href="{{ route('feature.brand') }}"
                        class="button"
                    >Get Started</a>
                </div>

                <img
                    src="https://framerusercontent.com/images/YzJUUIvSDd8BudvolunzPRi1QHY.jpeg"
                    alt=""
                    class="about__img"
                >
            </div>
        </section>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section
                class="home"
                id="design"
            >
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Packaging Design</h1>
                        <h2 class="home__subtitle">With just a few clicks, <span
                                style="color:rgb(82, 146, 255)">BOXIFY</span> will generate professional and custom
                            packaging designs tailored to your brand's unique identity.</h2>
                        <a
                            href="feature.packaging"
                            class="button"
                        >Get Started</a>
                    </div>

                    <img
                        width="150%"
                        src="https://framerusercontent.com/images/Lbqql6WxgIoVKePwFezko2gjZYc.png"
                        alt=""
                        class="home__img"
                    >
                </div>
            </section>



            <!--========== SERVICES ==========-->

            <!--========== MENU ==========-->
            <section
                class="about section bd-container"
                id="about"
            >
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <h2 class="section-title about__initial">Design Consultation</h2>
                        <p class="about__description"><span style="color:rgb(82, 146, 255)">BOXIFY</span>'s consultation
                            service provides expert design and packaging advice and guidance to help you make informed
                            decisions and achieve your business goals.</p>
                        <a
                            href="chatbox.php"
                            class="button"
                        >Get Started</a>
                    </div>

                    <img
                        src="https://framerusercontent.com/images/l7RjkZJuCqbMEKs2ydt7XP4Q.png?scale-down-to=1024"
                        alt=""
                        class="about__img"
                    >
                </div>
            </section>

            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Testimonials
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <img
                                style="border-radius: 10px"
                                width="80px"
                                src="https://framerusercontent.com/images/xAOUKYsOP9XaBZKMpvO5nutDg.jpg?scale-down-to=512"
                            >
                            <h3 class="steps__card-title">Sokha ChancheaTa</h3>
                            <p>@socheata</p><br>
                            <p class="steps__card-description">
                                Thank you for building such an empowering tool, especially for SMEs! I could create my own
                                brand identity in just a few seconds.
                            </p>
                        </div>

                        <div class="steps__card">
                            <img
                                style="border-radius: 10px"
                                width="70px"
                                src="https://framerusercontent.com/images/TilDRTc9W3qHxcTK2IaAK2KJyg.jpg?scale-down-to=512"
                            >
                            <h3 class="steps__card-title">Daniel Choi</h3>
                            <p>@danielc</p>
                            <br>
                            <p class="steps__card-description">
                                Playing around with <span style="color:rgb(82, 146, 255)">Boxify</span> while building a
                                small startup for a side project. I’m terrible at designs, but they make it so easy!
                            </p>
                        </div>

                        <div class="steps__card">
                            <img
                                style="border-radius: 10px"
                                width="80px"
                                src="https://framerusercontent.com/images/dgZntncjozHwcix3JwcbeGsrf0.jpg?scale-down-to=512"
                            >
                            <h3 class="steps__card-title">Kayla Ray</h3>
                            <p>@kayray</p>
                            <br>
                            <p class="steps__card-description">
                                I’ve got pretty handy packaging powered by other softwares in the past, but seeing <span
                                    style="color:rgb(82, 146, 255)"
                                >Boxify</span> tackle design stuff so effortlessly is mind-boggling.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== APP =======-->
        </main>
    @endsection
