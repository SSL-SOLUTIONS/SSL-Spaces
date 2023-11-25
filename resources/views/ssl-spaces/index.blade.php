<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
</head>

<body id="features-page">
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->

    <!-- main first text part  -->
    <div class="container">
        <div class="row">
            <div class="main-sec">
                <div class="main-text-sec">
                    <h1 class="heading-text" style="color: #000000;" data-aos="">
                        Premium Co-working Spaces &
                    </h1>
                    <h1 class="heading-text" style="color:#999999;" data-aos="">
                        Shared Offices in Lahore.
                    </h1>
                    <h1 class="heading-text" style=" white-space: nowrap;" data-aos="">
                        <a href="{{route('contact_us')}}" class="animated-text">
                            Schedule a Tour <span class="animated-textt"> >> </span>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <!--End main first text part  -->
    </div>
    <!-- second main text part  -->
    <div class="container-fluid">
        <div class="row" style="border-top: 1px solid #f6f6f6; padding:30px 0">
            <div class="col-lg-4 col-md-4 col-sm-12 pb-2 text-center">
                <div class="tick-text" data-aos="">
                    <img class="tick-main" src="{{asset('images/tick.png')}}" alt="">
                    <span class="tick-text-main">
                        Simplified and Affordable Plans.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 pb-2 text-center">
                <div class="tick-text" data-aos="">
                    <img class="tick-main" src="{{asset('images/tick.png')}}" alt="">
                    <span class="tick-text-main">
                        Latest Workspace on Jail Road, Lahore.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 pb-2 text-center">
                <div class="tick-text" data-aos="">
                    <img class="tick-main" src="{{asset('images/tick.png')}}" alt="">
                    <span class="tick-text-main">
                        Versatile Spaces for Meetings and Events.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End second main text part  -->

    <!-- slider Part -->
    <div class="container-fluid" data-aos="">
        <div class="pt-2 mb-5">
            <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="slider-img-main img-fluid" src="{{asset('images/co-working.png')}}">
                    </div>
                    <div class="carousel-item">
                        <img class="slider-img-main img-fluid" src="{{asset('images/co-working-1.png')}}" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img class="slider-img-main img-fluid" src="{{asset('images/co-working-2.png')}}">
                    </div>
                    <div class="carousel-item">
                        <img class="slider-img-main img-fluid" src="{{asset('images/co-working-4.png')}}" alt="Slide 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageSlider" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageSlider" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--End slider Part -->

    <!-- pictures part -->
    <div class="container">
        <div class="mt-5">
            <div class="second-text-sec">
                <h1 class="sec-heading-text" style="color: #000000;" data-aos="">
                    Discover the perfect blend of flexibility and functionality with our curated packages.
                    Explore
                    <a href="{{route('pricing')}}" class="animated-text" style="white-space: nowrap;">
                        All Options <span class="animated-textt"> >> </span>
                    </a>
                </h1>
            </div>
        </div>
        <!-- card part -->
        <div class="row text-center pt-5">
            <div class="col-lg-2.4 col-md-4 col-sm-6 mb-4" data-aos="">
                <a href="{{route('pricing')}}" style="text-decoration: none; color:#000000;">
                    <div class="card zoom m-3" style="box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.123);">
                        <img src="images/Private_icon.png" class="card-img-top" alt="Card 1">
                        <div class="card-body">
                            <h5 class="card-title">Night Office Space</h5>
                            <p class="card-text">A serene haven for focused work and tranquility. </p>
                            <h6 class="card-text">Starting from:</h6>
                            <h6 class="card-text">Rs.10,000/m</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2.4 col-md-4 col-sm-6 mb-4" data-aos="">
                <a href="{{route('pricing')}}" style="text-decoration: none; color:#000000;">
                    <div class="card zoom m-3" style="box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.123);">
                        <img src="images/opne-spaces.png" class="card-img-top" alt="Card 2">
                        <div class="card-body">
                            <h5 class="card-title">Open Space</h5>
                            <p class="card-text">Diminish solitude, enhance connections.</p>
                            <h6 class="card-text">Starting from:</h6>
                            <h6 class="card-text">Rs.13,000/m</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2.4 col-md-4 col-sm-6 mb-4" data-aos="">
                <a href="{{route('pricing')}}" style="text-decoration: none; color:#000000;">
                    <div class="card zoom m-3" style="box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.123);">
                        <img src="images/Private_icon.png" class="card-img-top" alt="Card 3">
                        <div class="card-body">
                            <h5 class="card-title">Private Space</h5>
                            <p class="card-text">Dedicate yourself to work your space, your rules</p>
                            <h6 class="card-text">Starting from:</h6>
                            <h6 class="card-text">Rs.50,000/m</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2.4 col-md-4 col-sm-6 mb-4" data-aos="">
                <a href="{{route('pricing')}}" style="text-decoration: none; color:#000000;">
                    <div class="card zoom m-3" style="box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.123);">
                        <img src="images/meeting-room.png" class="card-img-top" alt="Card 4">
                        <div class="card-body">
                            <h5 class="card-title">Meeting Room</h5>
                            <p class="card-text">Effortless reservations for seamless offsite meetings.</p>
                            <h6 class="card-text">Starting from:</h6>
                            <h6 class="card-text">Rs.3,000/m</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2.4 col-md-4 col-sm-6 mb-4" data-aos="">
                <a href="{{route('pricing')}}" style="text-decoration: none; color:#000000;">
                    <div class="card zoom m-3" style="box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.123);">
                        <img src="images/event.png" class="card-img-top" alt="Card 5">
                        <div class="card-body">
                            <h5 class="card-title">Event Space</h5>
                            <p class="card-text">Workshops, Meetups, Experiments, Training</p>
                            <h6 class="card-text">Starting from:</h6>
                            <h6 class="card-text">Rs.5,000/m</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2.4 col-md-4 col-sm-6 mb-4" data-aos="">
                <a href="{{route('pricing')}}" style="text-decoration: none; color:#000000;">
                    <div class="card zoom m-3" style="box-shadow: 0px 0px 10px 5px rgba(0,0,1,0.123);">
                        <img src="images/event.png" class="card-img-top" alt="Card 6">
                        <div class="card-body">
                            <h5 class="card-title">Single Space</h5>
                            <p class="card-text">Collaborate Online, Work Together with Us.</p>
                            <h6 class="card-text">Starting from:</h6>
                            <h6 class="card-text">Rs.4,000/m</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- End card part -->
        <div class="p-3" data-aos="">
            <h1 style="text-align: center; font-size:54px;">SSL <span style="color: #2ca8dd;">SPACES</span></h1>
        </div>
        <div class="row pt-5" data-aos="">
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-1.png" alt="">
                <p class="picture-text-sec">Seminars</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-2.png" alt="">
                <p class="picture-text-sec">Meetups</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-3.png" alt="">
                <p class="picture-text-sec">24/7 Access</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-4.png" alt="">
                <p class="picture-text-sec">High Speed Internet</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-5.png" alt="">
                <p class="picture-text-sec">Service Exchange</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-6.png" alt="">
                <p class="picture-text-sec">Lockers</p>
            </div>
        </div>
        <div class="row" data-aos="">
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-7.png" alt="">
                <p class="picture-text-sec">Unlimited Tea/Coffee</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-8.png" alt="">
                <p class="picture-text-sec">Huddle Room</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-9.png" alt="">
                <p class="picture-text-sec">Front Desk</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-10.png" alt="">
                <p class="picture-text-sec">Printing</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-11.png" alt="">
                <p class="picture-text-sec">LCD</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-12.png" alt="">
                <p class="picture-text-sec">Power Backup</p>
            </div>
        </div>
        <div class="row" data-aos="">
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-13.png" alt="">
                <p class="picture-text-sec">Conference Room</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-14.png" alt="">
                <p class="picture-text-sec">Top Location</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-15.png" alt="">
                <p class="picture-text-sec">Mail Services</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-16.png" alt="">
                <p class="picture-text-sec">Natural Light</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-17.png" alt="">
                <p class="picture-text-sec">Photography Studio</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-18.png" alt="">
                <p class="picture-text-sec">Videography Studio</p>
            </div>
        </div>
        <div class="row" data-aos="">
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-19.png" alt="">
                <p class="picture-text-sec">Community</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-20.png" alt="">
                <p class="picture-text-sec">Daily Cleaning</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-21.png" alt="">
                <p class="picture-text-sec">Car Parking</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-22.png" alt="">
                <p class="picture-text-sec">Landline Number</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-23.png" alt="">
                <p class="picture-text-sec">Networking</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-24.png" alt="">
                <p class="picture-text-sec">Signage Space</p>
            </div>
        </div>
        <div class="row pb-5 p-0" data-aos="">
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-25.png" alt="">
                <p class="picture-text-sec">Huddle Perks & Discounts</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-26.png" alt="">
                <p class="picture-text-sec">Event Space</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-27.png" alt="">
                <p class="picture-text-sec">Solar Power</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-28.png" alt="">
                <p class="picture-text-sec">Podcasts Room</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-29.png" alt="">
                <p class="picture-text-sec">Hackathon</p>
            </div>
            <div class="col-lg-2 col-sm-4 col-4">
                <img class="img-picture" src="images/sec-30.png" alt="">
                <p class="picture-text-sec">Security</p>
            </div>
        </div>
    </div>
    <!--End pictures part -->

    <!-- after FAQs part -->
    <div class="container-fluid">
        <div class="row p-5" style="background: #151414;">
            <div class="second-text-sec">
                <h1 class="sec-heading-text" style="color: #ffffff;" data-aos="">
                    No space for disappointment. <br> <span style="color: #999999;">Customize for you!</span>
                    <a href="{{ route('login') }}" class="animated-text" style="white-space: nowrap;">
                        Sign up <p class="animated-textt"> >> </p>
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <!--End after FAQs part -->

    <!-- FAQs Part -->
    <div class="container">
        <div class="p-3 text-center" data-aos="">
            <h1 class="faq-main"><b>FAQs</b></h1>
            <p class="fs-4">
                <b class="faq-text">
                    Stumped? We've got you covered.<br>
                    Explore our FAQs for the answers you seek.
                </b>
            </p>
        </div>
        <div class="row">
            <div id="accordion">
                <div class="card" data-aos="">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-1">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is SSL Spaces? 🧐
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            SSL Spaces, your contemporary yet cozy coworking and shared office space in Lahore, catering
                            to freelancers, entrepreneurs, businesses, and independent professionals. 👩🏻‍💻👨‍💻
                            Crafted with love ❤️ in Lahore, we take pride in being recognized as one of the top
                            coworking spaces for startups.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-1">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Wondering how to access the co-working space at SSL Spaces? 🤔
                            </button>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">

                            Simply complete the form on our website. 📃 Our representative will reach out to you for
                            confirmation and additional details. 📞
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer private cabins?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">

                            Certainly! We provide private offices and studios tailored for various team sizes. Explore
                            our pricing page for detailed package information.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What if I need to access the space late at night?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">

                            No worries! We've implemented a fingerprint door lock system for seamless access with an
                            added layer of security.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What does the virtual office package include?
                            </button>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Establish your market presence with our virtual office package. Benefit from call and mail
                            handling services, along with a prestigious business address at the prime location of
                            Landmark Plaza, Jail
                            Road, Lahore..
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How does a hot seat differ from a dedicated seat?
                            </button>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            Opting for a hot seat membership means your seating is flexible and can be relocated to
                            different spots at any time. In contrast, dedicated seats are fixed, exclusively reserved
                            for you, ensuring no one else can use it.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Is it allowed to leave my laptop at the workspace?
                            </button>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            Certainly! However, we recommend storing it in our lockers for added security. After all, we
                            understand the value of your gadgets. 😥
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                What additional amenities are included in the package?
                            </button>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            What more do you require? We've got you covered with all essential utilities and facilities.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                What benefits come with a membership at SSL Spaces?
                            </button>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">

                            Acquiring a membership at SSL Spaces provides you with access to a variety of amenities.
                            Additionally, you can enjoy exclusive discounts from our partner companies, like a 15%
                            discount at your preferred gym. It's also an opportunity to build connections with
                            like-minded individuals who share your interests.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                What is co-working?
                            </button>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            Coworking is a collaborative arrangement where individuals from different organizations
                            share office space, reducing costs. Freelancers, entrepreneurs, remote workers, and others
                            can easily access or obtain membership to a well-furnished workspace.
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingEleven">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                Who can use the coworking space?
                            </button>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li>Startup teams</li>
                                <li>Large scale corporations</li>
                                <li>Remote workers</li>
                                <li>Freelancers</li>
                                <li>Entrepreneurs</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="">
                    <div class="card-header" id="headingTwelve">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                What benefits do I get by using the co-working space at SSL Spaces?
                            </button>
                    </div>
                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                        <div class="card-body">
                            Joining SSL Spaces as your co-working space leads you to several benefits. <br>
                            <b>Various amenities</b>
                            <ul>
                                <li>Internet with Failover Connections</li>
                                <li>Power Backup</li>
                                <li>Unlimited Tea/Coffee</li>
                                <li>Cleaning, Repairs, and Maintenance</li>
                                <li>And much more…</li>
                            </ul>
                            <b>Discounts</b>
                            <ul>
                                <li>Avail exclusive discounts</li>
                            </ul>
                            <b>
                                Connection with like-minded people
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5 bg-light" style="border-radius: 20px; box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.123);" data-aos="">
            <div class="col-lg-6 p-4">
                <p class="last-text-main">We are keeping you safe during COVID-19.
                    <b style="color: #2ca8dd;"> A small distance makes a great difference:
                    </b>
                </p>
            </div>
            <div class="col-lg-6">
                <ul class="last-ul-main">
                    <li class="last-card-text">Daily cleaning of all surfaces and touchpoints.</li>
                    <li class="last-card-text">Large tables and windows in the hall.</li>
                    <li class="last-card-text">Hand sanitizers at the entry point.</li>
                </ul>
            </div>
        </div>
    </div>
    <!--End FAQs Part -->

    <!-- footer part  -->
    @include('ssl-spaces.ssl-components.footer')

    <!--End footer part  -->

    <button id="scrollToTopBtn">
        <b>
            <i class="fa-solid fa-arrow-up"></i>
        </b>
    </button>


    <script>
        function loadContent(event, route) {
            event.preventDefault(); // Prevent the default behavior of the link

            // Using the Fetch API
            fetch(route, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'text/html',
                    },
                })
                .then(response => response.text())
                .then(data => {
                    // Assuming you want to replace the entire body content with the response
                    document.body.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>