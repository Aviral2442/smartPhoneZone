@extends('layout.mainLayout')

@section('main')

<style>
    .hero-section{
        height: fit-content;
    }
    .left-section{
        /* padding: 0 50px; */
    }
    .banner-img{
        padding: 60px 0;
    }
</style>
    
    <div class="container-fluid hero-section px-4" >
        <div class="row ">
            <div class="col-md-6 align-self-center px-5 left-section">
                <h2 class="mainHeading py-2" >{{$aboutus[0]->mainHeading}}</h2>
                <p class="mainDesc" >{{$aboutus[0]->mainDescription}}</p>
            </div>
            <div class="col-md-6">
                <img src="/images/about-banner.jpg" class="banner-img " alt="shopping banner" width="100%">
            </div>
        </div>
    </div>

    <style>
        .box-border{
            border: 1px solid #e5e5e5;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            text-align: center;
        }
        .box-border:hover{
            background-color: red;
            color: white;
        }
        .card-icons{
            /* font-size: 20px; */
            background-color: rgb(78, 74, 74);
            border-radius: 100%;
            color: white;
            padding: 10px;
        }
    </style>

    <div class="container">
        <div class="row gap-3">
          <div class="col-md box-border">
            <div class="py-3" >
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



      <style>
        .box-border2{
            border: 1px solid #e5e5e5;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            text-align: center;
        }
        .box-border2:hover{
            background-color: rgb(200, 196, 196);
            color: white;
        }
        .card-icons2{
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
            <div class="py-3" >
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