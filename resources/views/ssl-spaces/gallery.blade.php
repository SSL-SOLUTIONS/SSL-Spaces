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
    <!-- <link rel="stylesheet" href="css/contact_us.css"> -->
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
</head>

<body id="features-page">
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-sec">
                <h1 class="first-contact" data-aos="zoom-in">
                    Gallery
                </h1>
            </div>
        </div>
        <div class="main">
            <div class="gallery">
                <div class="img" data-aos="fade-right">
                    <img src="{{asset('images/gallery-7.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-in">
                    <img src="{{asset('images/gallery-11.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="flip-up">
                    <img src="{{asset('images/gallery-3.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-in">
                    <img src="{{asset('images/gallery-4.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-in">
                    <img src="{{asset('images/gallery-16.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="flip-up">
                    <img src="{{asset('images/gallery-6.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-in">
                    <img src="{{asset('images/gallery-13.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="fade-right">
                    <img src="{{asset('images/gallery-8.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-out">
                    <img src="{{asset('images/gallery-9.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="fade-right">
                    <img src="{{asset('images/gallery-15.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-in">
                    <img src="{{asset('images/gallery-20.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-out">
                    <img src="{{asset('images/gallery-12.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="fade-right">
                    <img src="{{asset('images/gallery-10.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="flip-up">
                    <img src="{{asset('images/gallery-1.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="flip-up">
                    <img src="{{asset('images/gallery-6.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="fade-right">
                    <img src="{{asset('images/gallery-17.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-in">
                    <img src="{{asset('images/gallery-18.jpg')}}" alt="">
                </div>
                <div class="img" data-aos="zoom-out">
                    <img src="{{asset('images/gallery-19.jpg')}}" alt="">
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