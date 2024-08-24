@extends('layout.mainLayout')

@section('main')
    <style>
        .hero-section {
            height: fit-content;
        }

        .left-section {
            /* padding: 0 50px; */
        }

        .banner-img {
            padding: 60px 0;
        }
    </style>


    {{-- @dd($founders) --}}

    <div class="container-fluid hero-section px-4">
        <div class="row ">
            <div class="col-md-6 align-self-center px-5 left-section">
                <h2 class="mainHeading py-2">{{ $aboutus[0]->mainHeading }}</h2>
                <p class="mainDesc">{{ $aboutus[0]->mainDescription }}</p>
            </div>
            <div class="col-md-6">
                {{-- <img src="/images/about-banner.jpg" class="banner-img" alt="shopping banner" width="100%"> --}}
                <img src="{{ $aboutus[0]->mainBannerImg }}" class="banner-img" alt="shopping banner" width="100%">
            </div>
        </div>
    </div>

    <style>
        .box-border {
            border: 1px solid #e5e5e5;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            text-align: center;
        }

        .box-border:hover {
            background-color: red;
            color: white;
        }

        .card-icons {
            background-color: rgb(78, 74, 74);
            border-radius: 100%;
            color: white;
            padding: 10px;
        }
    </style>

    <div class="container">
        <div class="row gap-3">
            <div class="col-md box-border">
                <div class="py-3">
                    <i class="fa-solid fa-shop card-icons"></i>
                </div>
                <div>
                    <h3>10.5k</h3>
                    <p>Seller active our site</p>
                </div>
            </div>
            <div class="col-md box-border">
                <div class="py-3">
                    <i class="fa-solid fa-sack-dollar card-icons"></i>
                </div>
                <div>
                    <h3>33k</h3>
                    <p>Monthly sale in our site</p>
                </div>
            </div>
            <div class="col-md box-border">
                <div class="py-3">
                    <i class="fa-solid fa-people-group card-icons"></i>
                </div>
                <div>
                    <h3>45.5k</h3>
                    <p>Customer active in our site</p>
                </div>
            </div>
            <div class="col-md box-border">
                <div class="py-3">
                    <i class="fa-solid fa-dollar-sign card-icons"></i>
                </div>
                <div>
                    <h3>25k</h3>
                    <p>Anual gross sale in our site</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <style>
        .cardFounder{
            width: 300px;
        }
    </style>
 
    <div class="container">
        <div class="card p-4 shadow rounded cardFounder">
            <div class="founderImg">
                <img src="/images/founderImg.jpg" style="object-fit: cover;" class="rounded" alt="FounderImg" width="255px" height="320px">
            </div>
            <div class="pt-2">
                <h5 style="text-align: center" >{{ $aboutus[0]->founderName }}</h5>
                <p style="text-align: center" >{{ $aboutus[0]->founderDescription }}</p>
            </div>
        </div>
    </div> --}}

    <style>
        .slider-container {
            width: 1300px;
            /* 4 slides x 300px each */
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .cardFounder {
            min-width: 310px;
            box-sizing: border-box;
            margin-right: 10px;
            /* space between slides */
        }

        .cardFounder img {
            object-fit: cover;
            width: 100%;
            height: 320px;
        }

        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .controls button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
        }
    </style>

    @php
    $founders = json_decode($aboutus[0]->founderName);
    @endphp

    <div class="slider-container">
        <div class="slider p-2">
            @foreach ($founders as $item)
                
            <div class="card p-4 shadow rounded cardFounder">
                <div class="founderImg">
                    <img src="/images/founderImg.jpg" class="rounded" alt="FounderImg1">
                </div>
                <div class="pt-2">
                    <h5 style="text-align: center">{{$item->name}}</h5>
                    <p style="text-align: center">Description 1</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="controls">
            <button onclick="prevSlide()">❮</button>
            <button onclick="nextSlide()">❯</button>
        </div>
    </div>

    <script>
        const slider = document.querySelector('.slider');
        const totalSlides = 8; // Total number of slides
        const slidesToShow = 4; // Number of slides to show at once
        const slideWidth = 300; // Width of each slide in pixels
        let currentIndex = 0;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = totalSlides - slidesToShow;
            } else if (index > totalSlides - slidesToShow) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            slider.style.transform = 'translateX(' + (-currentIndex * (slideWidth + 10)) + 'px)';
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        // Auto-slide functionality
        setInterval(() => {
            nextSlide();
        }, 3000); // Change slide every 3 seconds

        // Stop auto-slide on mouse hover
        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.addEventListener('mouseover', () => clearInterval(autoSlide));
        sliderContainer.addEventListener('mouseleave', () => autoSlide = setInterval(nextSlide, 3000));
    </script>


    <style>
        .box-border2 {
            border: 1px solid #e5e5e5;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            text-align: center;
        }

        .box-border2:hover {
            background-color: rgb(200, 196, 196);
            color: white;
        }

        .card-icons2 {
            /* font-size: 20px; */
            background-color: rgb(78, 74, 74);
            border-radius: 100%;
            color: white;
            padding: 10px;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center gap-3">
            <div class="col-md-3 box-border2">
                <div class="py-3">
                    <i class="fa-solid fa-truck-fast card-icons2"></i>
                </div>
                <div>
                    <h5>Free and Fast Delivery</h5>
                    <p>Free delivery on all over $50</p>
                </div>
            </div>
            <div class="col-md-3 box-border2">
                <div class="py-3">
                    <i class="fa-solid fa-headset card-icons2"></i>
                </div>
                <div>
                    <h5>24/7 Customer Services</h5>
                    <p>Frendly 24/7 customer service</p>
                </div>
            </div>
            <div class="col-md-3 box-border2">
                <div class="py-3">
                    <i class="fa-solid fa-hand-holding-dollar card-icons2"></i>
                </div>
                <div>
                    <h5>Money Back Guarantee</h5>
                    <p>We return money within 1 weeks</p>
                </div>
            </div>
        </div>
    </div>
@endsection
