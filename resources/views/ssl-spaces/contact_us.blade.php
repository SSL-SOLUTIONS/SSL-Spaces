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
    <link rel="stylesheet" href="{{asset('css/contact_us.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
</head>

<body>
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->

    <!-- first feat part  -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-sec">
                <h1 class="first-contact" data-aos="zoom-in">
                    Sign Up For Our Coworking <br> Space Today!
                </h1>
                <p class="after-first-contant" data-aos="zoom-in">
                    Fill out the following form and we’ll do the rest for you.
                </p>
                <div class="inputs-contact" data-aos="fade-right">
                    <div class="input-sec">
                        <label for="your-name">Your Name</label>
                        <input type="text" id="your-name" name="your-name" placeholder="Enter Your Name">
                    </div>
                    <div class="input-sec">
                        <label for="company-name">Company Name</label>
                        <input type="text" id="company-name" name="company-name" placeholder="Enter Company Name">
                    </div>
                    <div class="input-sec">
                        <label for="mobile-number">Mobile Number*</label>
                        <input type="text" id="mobile-number" name="mobile-number" placeholder="Enter Mobile Number">
                    </div>
                    <div class="input-sec">
                        <label for="email">Email address*</label>
                        <input type="text" id="email" name="email" placeholder="Enter Email Address">
                    </div>
                    <div class="input-sec">
                        <label for="service">Service Required</label>
                        <select id="service" name="service">
                            <option value="country1">--Select--</option>
                            <option value="country2">Office Space</option>
                            <option value="country3">Meeting Room</option>
                            <option value="country4">Event Space</option>
                            <option value="country5">Videography/Photography</option>
                            <option value="country6">Podcast Studio</option>
                            <option value="country7">Others</option>
                        </select>
                    </div>
                    <button type="submit">Submit Request</button>
                </div>
            </div>
        </div>
        <!--End first feat part  -->
        <!-- second main text part  -->

    </div>
    <!-- End second main text part  -->

    <!-- footer part  -->
    @include('ssl-spaces.ssl-components.footer')
    <!--End footer part  -->

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