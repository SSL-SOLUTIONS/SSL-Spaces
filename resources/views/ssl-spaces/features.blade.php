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
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
</head>

<body id="features-page">
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->

    <!-- first feat part  -->
    <div class="container">
        <div class="row">
            <div class="main-sec">
                <h1 class="first-feat" data-aos="">
                    Co-working Space Features & <br> Amenities
                </h1>
            </div>
        </div>
        <!--End first feat part  -->

        <!-- second main text part  -->
        <div class="row pt-3 p-md-5 pb-sm-3 second-feat" data-aos="">
            <h3 class="after-first-feat">Scale at your own pace with all the built in amenities</h3>
        </div>
    </div>
    <!-- End second main text part  -->
    <div class="container-fluid p-5 m-sm-0">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="">
                <h4 class="row-first-feat">Space Access & areas</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="">
                <h4 class="row-second-feat">Shared Coworking Area amenities</h4>
            </div>
        </div>
        <!-- all imags section  -->
        <div class="row pt-4">
            <div class="col-lg-6 col-md-6 col-sm-12  pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-3.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">24/7</h5>
                            <p>An operational office space from Monday to Sunday.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-4.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Internet with Failover Connections</h5>
                            <p>High speed internet managed by a sophisticated system.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-1.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Meeting Rooms</h5>
                            <p>For all your planned and unplanned meetings.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-12.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Power Backup</h5>
                            <p>Uninterrupted power supply for smooth and hassle free operations of your business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <h4>
                    Safety and security
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-7.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Unlimited Tea/Coffee</h5>
                            <p>To keep you charged throughout your work days (and nights).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-36.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Member Access Only</h5>
                            <p>Access is restricted for members only using biometric access.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-35.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Cleaning, Repairs, and Maintenance</h5>
                            <p>Our facilities team takes care of all the cleaning and maintenance work.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-33.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">CCTV Covered</h5>
                            <p>All shared areas are covered by CCTV except for private.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-10.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Printing/Copying</h5>
                            <p>Printing, copying, and scanning is covered!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-6.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Lockers</h5>
                            <p>Keep your essentials safe and sound.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-8.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Huddle Room</h5>
                            <p>Complementary rooms for quick calls or meetings.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <h4>
                    Community
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-9.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Front Desk Services</h5>
                            <p>Receptionist services for taking calls or forwarding messages.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-31.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Networking and Partnerships</h5>
                            <p>Take a chance to learn the greatest skill of networking and develop partnerships
                                among
                                your coworkers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-35.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">LCD</h5>
                            <p>Convey your information through presentations, images, or documents etc.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-15.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Mail Handling</h5>
                            <p>Be more composed when your mails are managed effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-32.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">House Keeping</h5>
                            <p>Responsible staff to manage all affairs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <h4>
                    Business support
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-13.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Conference Room</h5>
                            <p>Designed solely to hold successful meetings and hosting guests.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-34.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Legal and Accounting Support</h5>
                            <p>
                                We have a legal consultant and an accounting team onboard that can help you get
                                through
                                the legal quagmire and taxt filing etc. (On separate charge).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-28.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Podcast Room</h5>
                            <p>Record your podcasts in a professional studio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-5.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Service Exchange</h5>
                            <p>Engage with your coworkers: find customers and reliable service providers among your
                                coworkers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-26.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Event Space</h5>
                            <p>Host your events that provide the sense of community.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-27.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Solar Power</h5>
                            <p>No worries of power failure.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pb-5" data-aos="">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-1">
                        <img class="img-feat" src="{{asset('images/sec-21.png')}}" alt="">
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                        <div class="item-feat">
                            <h5 class="feat-pic-head">Parking Space</h5>
                            <p>A safe and spacious area to park your vehicles.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End all imags section  -->
        <div class="row pt-3" data-aos="">
            <h1 class="gallery-feat">Gallery</h1>
            <h3 class="before-gallery pt-3" data-aos="flip-down">
                Sneak a look at a space that totally matches your comfort zone
            </h3>
        </div>
    </div>
    <div class="container-fluid p-5 pt-2">
        <div class="row text-center pt-5">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4 " data-aos="">
                <div class="card card-hover">
                    <img src="{{asset('images/feat-1.jpg')}}" class="card-img-topp" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Creative Collaboration</h5>
                        <p class="card-text">
                            Boost your productivity and idea of generation in an inspirational environment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="">
                <div class="card card-hover">
                    <img src="{{asset('images/feat-2.jpg')}}" class="card-img-topp" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Sense of Community</h5>
                        <p class="card-text">
                            Engage with like-minded people and create a sense of community instead of isolation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="">
                <div class="card card-hover">
                    <img src="{{asset('images/feat-3.jpg')}}" class="card-img-topp" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Effective Meetings</h5>
                        <p class="card-text">
                            Run your profitable meetings in a connected culture while making a great impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="">
                <div class="card card-hover">
                    <img src="{{asset('images/feat-4.jpg')}}" class="card-img-topp" alt="Card 4">
                    <div class="card-body">
                        <h5 class="card-title">Team Building</h5>
                        <p class="card-text">
                            Strengthen your bond between your coworkers in an enhanced office world.
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="">
                <button class="button-feat mb-3" style="white-space: nowrap;">
                    <a href="{{route('index')}}" style="text-decoration: none;color:#000;">
                        Expolre our spaces
                    </a>
                </button>
            </div>
        </div>
        <div class="row">
            <div data-aos="">
                <h1 class="gallery-feat pt-5">Parteners</h1>
                <h3 class="before-gallery">
                    Avail huge discounts and save more with our partners
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 pt-5" data-aos="">
                <div class="card text-center" style="border-radius: 10px;">
                    <div class="justify-content-center">
                        <a href="https://www.zameen.com/">
                            <img style="height: 80px; margin-top:10px;" src="{{asset('images/zameen-logo.png')}}" class="zoom" alt="Card">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-textt">
                            Avail yourself of a 10% discount on all services, and receive a free digital asset audit as an added bonus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pt-5" data-aos="">
                <div class="card text-center" style="border-radius: 10px;">
                    <div class="justify-content-center">
                        <a href="https://www.airbnb.com/">
                            <img style="height: 80px; margin-top:10px;" src="{{asset('images/airbnb-logo.png')}}" class="img-fluid zoom" alt="Card">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-textt">
                            Enjoy a 10% discount on our complete range of services, and don't miss out on a free digital asset audit and consultation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pt-5" data-aos="">
                <div class="card text-center" style="border-radius: 10px;">
                    <div class="justify-content-center">
                        <a href="https://www.olx.com.pk/">
                            <img style="height: 80px; margin-top:10px;" src="{{asset('images/olx-logo.jpg.png')}}" class="img-fluid zoom" alt="Card">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-textt">
                            Take advantage of a 10% discount on all services, plus receive a complimentary digital asset audit and consultation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6    col-sm-6 pt-5" data-aos="">
                <div class="card text-center" style="border-radius: 10px;">
                    <div class="justify-content-center">
                        <a href="https://thesslgroup.com/">
                            <img style="height: 80px; margin-top:10px;" src="{{asset('images/ssl-logo-black.png')}}" class="img-fluid zoom" alt="Card">
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="card-textt">
                            Receive a 10% discount on all services, coupled with a free digital asset audit and consultation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


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