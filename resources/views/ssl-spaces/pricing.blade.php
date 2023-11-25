<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/features.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/lern&grow.css')}}">
    <!-- <link rel="stylesheet" href="css/contact_us.css"> -->
    <link rel="stylesheet" href="{{asset('css/blogs.css')}}">
    <link rel="stylesheet" href="{{asset('css/pricing.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
    <style>
        #container-inside {
            box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.05);
            background: #ffffff;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        #main-container-02 {
            display: none;
        }

        @media (max-width:768px) {
            #main-container {
                display: none;
            }

            #main-container-02 {
                display: block;
            }

            .main-sec {
                margin-top: 90px;
                margin-bottom: 30px;
                width: 100%;
                height: 100%;
            }

            .first-pricing {
                font-size: 40px;
                font-weight: 800;
            }

            .second-pricing {
                font-size: 35px;
                font-weight: 900;
                color: #999999;
            }
        }

        #Speak-to-Our {
            border-radius: 10px;
            box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.05);
        }

        #speak-col-1 {
            text-decoration: none;
            color: #8e8e8e;

        }

        #speak-col-mein {
            border: 1px solid rgb(233, 228, 228);
            border-radius: 5px;
        }

        #speak-col-mein:hover {
            border: 1px solid #2ca8dd;
        }

        #last-pricing {
            border-radius: 20px;
            background-color: #f8f8f8;
        }
    </style>
</head>

<body id="features-page">
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->



    <!-- Screen Reso. 1280px to 768px -->
    <div class="container-fluid" id="main-container">
        <div class="row">
            <div class="main-sec">
                <h1 class="first-pricing" data-aos="">
                    Coworking <br> Space Prices & Packages
                </h1>
                <h3 class="p-5" data-aos="">Flexible and Affordable</h3>
                <h1 class="second-pricing" data-aos="">
                    Open Space Plans
                </h1>
            </div>
        </div>

        <!-- Open Space Plans -->
        <div class="container mt-4" id="container-inside">
            <div class="chair-container" data-aos="">
                <img src="{{asset('images/chair.png')}}" alt="Chair" class="chair-image" id="chair">
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card" style="background: #2ca8dd;">
                                <div class="card-body">
                                    <div class="custom-box">
                                        <h6 class="text-center most-popular-card">
                                            Most Popular
                                        </h6>
                                    </div>
                                    <h5 class="card-title text-light">
                                        Hot Seat Lite
                                    </h5>
                                    <div class="p-3 text-light">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            8,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            <span>Book Now</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Hot Seat +
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            8,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Dedicated Lite
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            8,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Dedicated +
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            8,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-light pt-3" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">24 hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">24 hours</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">All Utilities & Facilities ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Meeting Room Access</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">06 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">08 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">08 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">16 Hours</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Alumni Discount ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">05%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">10%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">05%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">10%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Partners Benefits ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Open Space Plans -->

        <!-- Night Space Plans -->
        <div class="row">
            <h1 class="second-pricing text-center p-5" data-aos="">
                Night Space Plans
            </h1>
        </div>
        <div class="container mt-4" id="container-inside">
            <div class="chair-container" data-aos="">
                <img src="{{asset('images/chair.png')}}" alt="Chair" class="chair-image" id="chair">
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card" style="background: #2ca8dd;">
                                <div class="card-body">
                                    <div class="custom-box">
                                        <h6 class="text-center most-popular-card">
                                            Most Popular
                                        </h6>
                                    </div>
                                    <h5 class="card-title text-light">
                                        Hot Seat Lite
                                    </h5>
                                    <div class="p-3 text-light">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            25,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Hot Seat +
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            25,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Dedicated Lite
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            25,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Dedicated +
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            25,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-light pt-3" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">24 hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">24 hours</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="" style="color: #bebebe;white-space: nowrap; text-align: center;">
                        All Utilities & Facilities ⓘ
                    </p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Meeting Room Access</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">06 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">08 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">08 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">16 Hours</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Alumni Discount ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">05%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">10%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">05%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">10%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Partners Benefits ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Night Space Plans -->

        <!-- Day Pass Plan Section  -->
        <div class="row">
            <h1 class="second-pricing text-center p-5" data-aos="">
                Day Pass Plan
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12">
                    <div class="row mb-5">
                        <div class="col-lg-4 col-md-4" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Day Pass
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            1500
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Day
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style="white-space: nowrap;">24
                                                    Hours Access</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">01 Day Pass</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">
                                                    Meeting Room Available on Demand</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Week Pass
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            5000
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Week
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class=" d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">24
                                                    Hours Access</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">07 Days Pass</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">Meeting Room Available
                                                    on Demand</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-aos="">
                            <div class="card" style="background: #2ca8dd;border-radius: 20px;">
                                <div class="card-body">
                                    <div class="custom-box">
                                        <h6 class="text-center most-popular-card">
                                            Most Popular
                                        </h6>
                                    </div>
                                    <h5 class="card-title text-light">
                                        Virtual Office
                                    </h5>
                                    <div class="text-light px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            25,000
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Month
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">Shared Landline</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">Business Address</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">8
                                                    Hours Meeting Room
                                                    Access Monthly
                                                </b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Day Pass Plan Section  -->


        <!-- Private Studio section  -->
        <div class="row">
            <h1 class="second-pricing text-center p-5" data-aos="">
                Private Studio
            </h1>
        </div>
        <div class="container mt-4 mb-5" id="container-inside">
            <div class="chair-container" data-aos="">
                <img src="{{asset('images/chair.png')}}" alt="Chair" class="chair-image" id="chair">
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Morning Studio
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            15,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Night Studio
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            15,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card" style="background: #2ca8dd;">
                                <div class="card-body">
                                    <div class="custom-box">
                                        <h6 class="text-center most-popular-card">
                                            Most Popular
                                        </h6>
                                    </div>
                                    <h5 class="card-title text-light">
                                        Studio++
                                    </h5>
                                    <div class="p-3 text-light">
                                        <h6 class="text-left">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            15,000
                                        </h1>
                                        <h6 class="text-end">
                                            Per Month
                                        </h6>
                                    </div>
                                    <button class="pricing-book-button">
                                        <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                            Book Now
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 p-0" data-aos="">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                    </h5>
                                    <div class="p-3">
                                        <h6 class="text-left">
                                        </h6>
                                        <h1 class="text-center price-card">
                                        </h1>
                                        <h6 class="text-end">
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-light pt-3" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">9am to 9pm</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: bold;">24 hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="" style="color: #bebebe;white-space: nowrap; text-align: center;">All Utilities &
                        Facilities ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Meeting Room Access</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">06 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">08 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">08 Hours</p>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Alumni Discount ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">05%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">10%</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">05%</p>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Partners Benefits ⓘ</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;" data-aos="">
                <div class="col-lg-2 col-md-2">
                    <p class="text-start" style="color: #bebebe;white-space: nowrap;">Number of People</p>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">
                                5 -6 people
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">
                                5 -6 people
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p class="text-center" style="font-weight: 600;">
                                5 -6 people
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Private Studio section  -->

        <!-- After Photo Studia section  -->
        <div class="container mt-5 py-5">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row mb-5">
                        <div class="col-lg-4 col-md-4" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Locker
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            15,00
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Month
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Call Handling
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            5,000
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Month
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Printing
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            5,000
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Black and White Print
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End After Photo Studia section  -->

        <!-- Speak to Our Community Manager -->
        <div class="container  mb-5" id="Speak-to-Our">
            <div class="row">
                <h3 class="text-center pt-5" data-aos="">
                    Speak to Our Community Manager
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-4 p-4" data-aos="">
                    <a href="#" id="speak-col-1">
                        <div class="text-center p-3" id="speak-col-mein">
                            <div>
                                <img src="images/call-icon.png" alt="">
                            </div>
                            <div class="pt-2">
                                <p>03269909959</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 p-4" data-aos="">
                    <a href="#" id="speak-col-1">
                        <div class="text-center p-3" id="speak-col-mein">
                            <div>
                                <img src="images/headphone-icon.png" alt="">
                            </div>
                            <div class="pt-2">
                                <p>Live Chat</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 p-4" data-aos="">
                    <a href="#" id="speak-col-1">
                        <div class="text-center p-3" id="speak-col-mein">
                            <div class="text-center">
                                <img src="images/call-back-icon.png" alt="">
                            </div>
                            <div class="pt-2">
                                <p>Get a Call Back</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--End Speak to Our Community Manager -->

        <!-- last section  -->
        <div class="container mt-5 py-5" id="last-pricing" data-aos="">
            <div class="row">
                <div class="col-lg-8">
                    <h1 style="font-size: 60px; font-weight:800; color: #2ca8dd;">We Know co-working</h1>
                    <h2 style="font-size:45px;font-weight: 700; color: #000;">So we've built one for you</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <p>
                        SSL Spaces is an incredible co-working studio where you can learn to connect, <br>
                        collaborate, and create. Join us to get your creative juices flowing. <br>
                        The ever <br>
                        changing and easy going environment of SSL Spaces provides you adaptability <br>
                        to work where you want, when you want and scale the best of services and <br>
                        opportunities.
                    </p>
                    <button class="enroll-btn">
                        <a href="{{route('index')}}" style="text-decoration: none; color:#fff">
                            Move Here Now
                        </a>
                    </button>
                </div>
                <div class="col-lg-5"></div>
                </p>
            </div>
        </div>
        <!--End last section  -->
    </div>
    <!--End Screen Reso. 1280px to 768px -->








    <!-- Screen Reso. 768px to below -->
    <div class="container-fluid" id="main-container-02">
        <div class="row">
            <div class="main-sec">
                <h1 class="first-pricing" data-aos="">
                    Coworking <br> Space Prices & Packages
                </h1>
                <h3 class="p-2">Flexible and Affordable</h3>
                <h1 class="second-pricing">
                    Open Space Plans
                </h1>
            </div>
        </div>
        <!-- Open Space Plans -->

        <!-- 1st section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="background: #2ca8dd; border-radius: 20px;box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                            <div class="card-body">
                                <div class="custom-box">
                                    <h6 class="text-center most-popular-card">
                                        Most Popular
                                    </h6>
                                </div>
                                <h5 class="card-title text-light">
                                    Hot Seat Lite
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3 text-light">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                8000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">06 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">05%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 05</p>
            </div>
        </div>
        <!--End 1st section  -->

        <!-- 2nd section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Hot Seat +
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                8000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">10%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">08 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 02</p>
            </div>
        </div>
        <!--End 2nd section  -->

        <!-- 3rd section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Dedicated Lite
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                8000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">08 House</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">10%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 10</p>
            </div>
        </div>
        <!-- 3rd section  -->

        <!-- 4th section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Dedicated +
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                8000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">24 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">16 House</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">10%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 08</p>
            </div>
        </div>
        <!-- 4th section  -->


        <!-- Night Space Section  -->
        <div class="row">
            <div class="main-sec">
                <h1 class="second-pricing pb-2">
                    Night Space Plans
                </h1>
            </div>
        </div>
        <!-- 1st section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="background: #2ca8dd; border-radius: 20px;box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                            <div class="card-body">
                                <div class="custom-box">
                                    <h6 class="text-center most-popular-card">
                                        Most Popular
                                    </h6>
                                </div>
                                <h5 class="card-title text-light">
                                    Hot Seat Lite
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3 text-light">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                25,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">9am to 9pm</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">06 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">06%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 05</p>
            </div>
        </div>
        <!--End 1st section  -->

        <!-- 2nd section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Hot Seat +
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                25,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">24 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">10%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">08 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 02</p>
            </div>
        </div>
        <!--End 2nd section  -->

        <!-- 3rd section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Dedicated Lite
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                25,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">9am to 7pm</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">08 House</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">5%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 10</p>
            </div>
        </div>
        <!-- 3rd section  -->

        <!-- 4th section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Dedicated +
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                25,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light pt-3">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Time</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">24 Hours</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">All Utilities & Facilities</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold; color: #bebebe;">Meeting Room Access</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">16 House</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Alumni Discount</p>
            </div>
            <div class="col-6 text-center">
                <p class="text-center" style="font-weight: bold;">10%</p>
            </div>
        </div>
        <div class="row pt-3" style="border-bottom: 1px solid #f8f8f8;">
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;color: #bebebe;">Partners Benefits</p>
            </div>
            <div class="col-6 text-center">
                <img style="height: 20px;" src="{{asset('images/tick.png')}}" alt="">
            </div>
        </div>
        <div class="row bg-light pt-3 mb-2">
            <div class="col-6">
                <p class="text-center" style="color: #2ca8dd; font-weight: bold;">Seats Left</p>
            </div>
            <div class="col-6">
                <p class="text-center" style="font-weight: bold;">Only 08</p>
            </div>
        </div>
        <!-- 4th section  -->
        <!-- Night Space Section  -->

        <!-- Day plan section  -->
        <div class="row">
            <h1 class="second-pricing text-center py-5" data-aos="">
                Day Pass Plan
            </h1>
        </div>
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-lg-12 col-md-12">
                    <div class="row mb-5">
                        <div class="col-lg-4 col-md-4 col-sm-12 pb-3" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Day Pass
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            15,00
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Day
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex ">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style="white-space: nowrap;">24
                                                    Hours Access</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex ">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">01 Day Pass</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex ">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">Meeting Room Available
                                                    on Demand</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 py-4" data-aos="">
                            <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Week Pass
                                    </h5>
                                    <div class="px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            5000
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Week
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class=" d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">24
                                                    Hours Access</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">07 Days Pass</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec">Meeting Room Available
                                                    on Demand</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 py-5" data-aos="">
                            <div class="card" style="background: #2ca8dd;border-radius: 20px;">
                                <div class="card-body">
                                    <div class="custom-box">
                                        <h6 class="text-center most-popular-card">
                                            Most Popular
                                        </h6>
                                    </div>
                                    <h5 class="card-title text-light">
                                        Virtual Office
                                    </h5>
                                    <div class="text-light px-5 p-1">
                                        <h6 class="text-left" style="font-weight: 100;">
                                            PKR
                                        </h6>
                                        <h1 class="text-center price-card">
                                            25,000
                                        </h1>
                                        <h6 class="text-end" style="font-weight: 100;">
                                            Per Month
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">Shared Landline</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">Business Address</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <img style="height: 15px;" src="{{asset('images/task.png')}}" alt="">
                                                <b id="day-plan-dec" style=" white-space: nowrap;">8
                                                    Hours Meeting Room
                                                    Access Monthly
                                                </b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Day Plan Section  -->

        <!-- Private Studio  -->
        <div class="row">
            <h1 class="second-pricing text-center pb-3" data-aos="">
                Private Studio
            </h1>
        </div>
        <!-- 1st section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="background: #2ca8dd; border-radius: 20px;box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.123);">
                            <div class="card-body">
                                <div class="custom-box">
                                    <h6 class="text-center most-popular-card">
                                        Most Popular
                                    </h6>
                                </div>
                                <h5 class="card-title text-light">
                                    Morning Studio
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3 text-light">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                15,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End 1st section  -->

        <!-- 2nd section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Night Studio
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                15,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End 2nd section  -->

        <!-- 3rd section  -->
        <div class="row p-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card" style="border-radius: 20px; box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.123);">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Studio ++
                                </h5>
                                <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <div class="p-3">
                                            <h6 class="text-left">
                                                PKR
                                            </h6>
                                            <h1 class="text-center price-card">
                                                15,000
                                            </h1>
                                            <h6 class="text-end">
                                                Per Month
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <button class="pricing-book-button">
                                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                                        Book Now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3rd section  -->
        <!-- End Private Studio  -->

    </div>
    <!--End Screen Reso. 768px to below -->

    <!-- footer part  -->
    @include('ssl-spaces.ssl-components.footer')
    <!--End footer part  -->
    <button id="scrollToTopBtn">
        <b><i class="fa-solid fa-arrow-up"></i></b>
    </button>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mybutton = document.getElementById("scrollToTopBtn");

            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            mybutton.addEventListener("click", function() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });
        });
    </script>
    <script>
        const currentURL = window.location.href;
        const navLinks = document.querySelectorAll('.links-nav');
        navLinks.forEach(link => {
            if (link.href === currentURL) {
                link.style.color = '#2ea9dd';
            }
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            offset: 12
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>