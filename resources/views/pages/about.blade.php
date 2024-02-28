@extends('pages.layout.app')
@section('content')
    <style>
        h2 {
            margin-top: 0px;
            margin-bottom: 0em;
            color: #141730;
             font-size: 30px;
            line-height: 1.35em;
            font-weight: 800;
            letter-spacing: -0.01em;
        }
        h3, p{
            font-size: 22px;
            text-align: left;
        }

    </style>

    <div class="section gradient-1 no-overflow">

        @include('pages.layout.header')


    </div>


    <div class="section">
        <div class="container giant-top">
            <div class="_8-column">
                <div id="w-node-_8dec3d03-4f0f-8eaa-2d12-e880ab8b8cb5-f84df573" class="hero-center">
                    <h5 class="_1-5em-bottom-margin">
                        <span class="rich-purple-text">About {{ env('APP_NAME')  }}?</span>
                    </h5>
                    <h2 class="_5em-bottom-margin">Who We Are</h2>
                    <div class="hero-subtitle-container">
                        <h3 class="_1-5em-bottom-margin">
                            We are a financial company with the customer at heart, the internet as our foundation, and technology as our lifeblood.
                            <br />
                            <br>
                            Our leadership has extensive experience in both the internet and financial industries. We are committed to synergizing technology with finance by providing reliable, professional, intelligent and efficient products and services.

                        </h3>
                    </div>
                    <h2  class="_5em-bottom-margin">Our Belief</h2>
                    <div class="hero-subtitle-container">
                        <h3 class="_1-5em-bottom-margin">
                            Individuals are an important part of the market and should not be ignored. They should be empowered with better information, tools, services, opportunities, and lower costs. Respecting the investor is respecting the market.
                            <br>
                            Technology is the investor’s best friend. It vastly expands the human’s trading capabilities in terms of time, scale, and technique. Technology is the future.
                        </h3>
                    </div>
                    <h2  class="_5em-bottom-margin">What We Offer</h2>
                    <div class="hero-subtitle-container">
                        <h3 class="_1-5em-bottom-margin">
                            As a financial company driven by technology, we aim to offer:
                        </h3>
                        <div style="text-align: left">
                            <p>- An all-in-one self-directed investment platform that provides excellent user experience
                            </p>
                            <p>- Automated trading</p>
                            <p>- High frequency Algorithms </p>
                            <p>- Advanced and intelligent tools and services</p>
                        </div>
                        <h3 class="_1-5em-bottom-margin">
                            Key Features:
                        </h3>
                        <div style="text-align: left">
                            <p>- Free Real-Time Quotes*</p>
                            <p>- Multi-platform Accessibility</p>
                            <p>- Full Extended Hours Trading</p>
                            <p>- 24/7 Online Help</p>
                        </div>
                    </div>
                    <br>
                    <div class="hero-subtitle-container">
                        <h3 style="text-align: left" class="_1-5em-bottom-margin">
                            Brokerage services are provided by {{ env('APP_NAME')  }} Financial LLC, a broker dealer registered with the Securities and Exchange Commission (SEC).
                            <br>
                            {{ env('APP_NAME')  }} Financial LLC stays up-to-date with the latest data security in order to protect our investors’ personal information and asset. Our clearing firm, Apex Clearing Corp., has purchased an additional insurance policy. The coverage limits provide protection for securities and cash up to an aggregate of $150 million, subject to maximum limits of $37.5 million for any one customer’s securities and $900,000 for any one customer’s cash. Similar to SIPC protection.
                            <br>
                            {{ env('APP_NAME')  }} Financial LLC stays up-to-date with the latest data security in order to protect our investors’ personal information and assets.
                        </h3>
                    </div>



                </div>
            </div>
        </div>

    </div>
    <br>



@endsection
