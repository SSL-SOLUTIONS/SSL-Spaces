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
    <link rel="stylesheet" href="{{asset('css/lern&grow.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
    <style>
        .contact-lern {
            text-align: center;
            margin-top: 30px;
            padding: 7px;
            width: 45%;
            background-color: #2ca8dd;
            border-radius: 5px;
            color: #fff;
            border: 1px solid #2ca8dd;
            transition: 0.3s;
        }

        .contact-lern:hover {
            border: 1px solid #2ca8dd;
            background-color: transparent;
            color: #2ca8dd;
        }
    </style>
</head>

<body id="features-page">
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->

    <!-- first feat part  -->
    <div class="container">
        <div class="row">
            <div class="main-sec">
                <h1 class="first-lern" data-aos="">
                    Your Partner in Corporate Events & <br> Worskshops
                </h1>
            </div>
        </div>
        <!--End first feat part  -->
        <!-- second main text part  -->
        <div class="row pt-5 p-md-5 pb-sm-3 ">
            <h3 class="second-lern" data-aos="">
                Learn with purpose and grow with dignity
            </h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h1 class="first-lern" data-aos="">Past Events</h1>
        </div>
        <div class="row p-5" data-aos="">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card p-0" style="height: 100%;width: 100%;">
                    <img style="height: 100%; width: 100%;" src="{{asset('images/card-lern.jpg')}}" class="" alt="Card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="#" class="main-title">
                                29TH FEBRUARY, 2020 2:00 PM
                            </a>
                        </div>
                        <div>
                            <p class="card-des">
                                Break Barriers: Become your own boss.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="first-lern" data-aos="">Upcoming Events</h1>
        </div>
        <div class="row p-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div data-aos="">
                    <h1 class="upcoming-lern">No upcoming events</h1>
                    <h5 class="after-upcoming-lern">Do you want to book your event with us? </h5>
                </div>
                <div data-aos="">
                    <a href="{{route('contact_us')}}" style="text-decoration: none;color:#000;">
                        <button class="contact-lern">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row" data-aos="">
            <h1 class="first-lern">SSL SPACES Academy</h1>
        </div>
        <div class="row p-5" data-aos="">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                <div class="card" style="border-radius: 10px;">
                    <a href="#">
                        <div class="justify-content-center">
                            <img style="width: 100%;" src="https://www.huddle.pk/wp-content/uploads/2020/06/seo-fundamentals-in-huddle-academy-scaled.jpg" alt="">
                        </div>
                    </a>
                    <div class="card-body">
                        <p class="academy-card">
                            FUNDAMENTALS OF SEO
                        </p>
                        <button class="enroll-btn">
                            Enroll Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row p-5" style="background: #151414;">
            <div class="second-text-sec" data-aos="">
                <h1 class="heading-text" style="color: #ffffff;">
                    No room for dissatisfaction. <b style="color: #999999;">A space that is designed for you!</b>
                    <a href="{{route('login')}}" class="animated-text" style=" white-space: nowrap;">
                        Sign up <p class="animated-textt"> >> </p>
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <!-- End second main text part  -->

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