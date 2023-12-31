@extends('layout.master')

@section('content')
    <h1 style="text-align: center;">Pricing Card -</h1>
    <div class="pricing-card-container">
        <div class="pricing-cards">
            <div class="pricingCard">
                <div class="pricingCard-title">
                    <h3>Basic</h3>
                </div>
                <div class="pricingCard-pricing">
                    $<span class="price">0</span>/File
                </div>
                <a
                    href=""
                    class="pricingCard-basket"
                >
                    Get Started
                </a>
                <div class="pricingCard-properties">
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Free AI generated design
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Free customization
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Link to suppliers
                    </p>
                </div>

            </div><!-- pricingCard -->


            <div class="pricingCard orta centers">
                <div class="pricingCard-title">
                    <h3>Standard</h3>
                </div>
                <div class="pricingCard-pricing">
                    $<span class="price">1</span>/File
                </div>
                <a
                    href=""
                    class="pricingCard-basket"
                >
                    Get Started
                </a>
                <div class="pricingCard-properties">
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Free AI generated design
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Free customization
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Link to suppliers
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Limited designer consultant
                    </p>
                </div>
            </div><!-- pricingCard -->
            <div class="pricingCard">
                <div class="pricingCard-title">
                    <h3>Prumium</h3>
                </div>
                <div class="pricingCard-pricing">
                    $<span class="price">5$</span>/File
                </div>
                <a
                    href=""
                    class="pricingCard-basket"
                >
                    Get Started
                </a>
                <div class="pricingCard-properties">
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Free AI generated design
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Free customization
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Link to suppliers
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Unlimited design consultant
                    </p>
                    <p>
                        <i
                            class="fas fa-check"
                            style="color: #00b67a;"
                        ></i>
                        Redesigning brand identity
                    </p>
                </div>
            </div><!-- pricingCard -->
        </div><!-- pricing-cards -->
    </div><!-- pricing-card-container -->
@endsection

@section('js')
    <script src="./JS/box.js"></script>
@endsection
