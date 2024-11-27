<!-- Footer -->
<footer class="pb-70">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-4">
            <div class="footer-item">
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <i class="icofont-ui-message"></i>
                            <a href="mailto:hospital@tmu.ac.in">hospital@tmu.ac.in</a>
                            <a href="mailto:tmu-hospital@tmu.ac.in">tmu-hospital@tmu.ac.in</a>
                        </li>
                        <li>
                            <i class="icofont-stock-mobile"></i>
                            <a href="tel:+07554332322">Call: 095688 65444</a>
                            <a href="tel:+236256256365">Call: 072170 18724</a>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            Bagadpur, Uttar Pradesh <br> 244001
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-2">
            <div class="footer-item">
                <div class="footer-quick">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="/About-Us">About us</a>
                        </li>
                        <li>
                            <a href="/Blog">Blog</a>
                        </li>
                        <li>
                            <a href="#">Our Expertise</a>
                        </li>
                        <li>
                            <a href="#">Faq</a>
                        </li>
                        <li>
                            <a href="#">Doctors</a>
                        </li>
                        <li>
                            <a href="/Contact-Us">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
                <div class="footer-quick">
                    <h3>Our Services</h3>
                    <ul>
                        <li>
                            <a href="service-details.html">Dental Care</a>
                        </li>
                        <li>
                            <a href="/cardiology">Cardiology</a>
                        </li>
                        <li>
                            <a href="service-details.html">Hijama Therapy</a>
                        </li>
                        <li>
                            <a href="service-details.html">Massage Therapy</a>
                        </li>
                        <li>
                            <a href="service-details.html">Ambluance Sevices</a>
                        </li>
                        <li>
                            <a href="service-details.html">Medicine</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
                <div class="footer-feedback">
                    <h3>Feedback</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="your_message" rows="5"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn feedback-btn">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class="copyright-area">
<div class="container">
    <div class="copyright-item">
        <p>© <span>TMU Hospital </span> is Proudly Owned by <a href="https://tmu.ac.in"
                target="_blank">TMU</a></p>
    </div>
</div>
</div>
<!-- End Copyright -->


<!-- Essential JS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<!-- Slider Slider JS -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Form Ajaxchimp JS -->
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator JS -->
<script src="{{asset('js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('js/contact-form-script.js')}}"></script>
<!-- Odometer JS -->
<script src="{{asset('js/odometer.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
<!-- Owl Carousel2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- imageMapResize JS -->
<script src="{{asset('js/imageMapResizer.js')}}"></script>



<!-- JS for adding active class to nav-item-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentUrl = window.location.pathname.toLowerCase().replace(/\/$/, ""); 
        // Select all nav-link elements
        const navLinks = document.querySelectorAll('.nav-link');
    
        // Loop through each nav-link to find the one that matches the current URL
        navLinks.forEach(link => {
            const linkPath = link.getAttribute('data-path');
            if (linkPath) {
                const normalizedLinkPath = linkPath.toLowerCase().replace(/\/$/, "");
                if (currentUrl === normalizedLinkPath) {
                    link.classList.add('active'); 
                }
            } else {
                console.warn("Skipping nav-link with no data-path attribute:", link);
            }
        });
    });
    
    
    
</script>

<script>
    imageMapResize();
</script>

<!-- Js for our services section  -->
<script>
$(document).ready(function () {
    var owl = $(".services-section .owl-carousel");
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay:true,
        autoplayTimeout:5000,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },
        
            786: {
                items: 2,
            },
            1240: {
                items: 3,
            },
        },
    });

    $(".owl-prev").click(function () {
        owl.trigger("prev.owl.carousel");
    });

    $(".owl-next").click(function () {
        owl.trigger("next.owl.carousel");
    });
});

$(document).ready(function () {
    var owl = $(".hospital-awards .owl-carousel");
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },

            786: {
                items: 2,
            },
            1240: {
                items: 3,
            },
        },
    });

    $(".owl-prev").click(function () {
        owl.trigger("prev.owl.carousel");
    });

    $(".owl-next").click(function () {
        owl.trigger("next.owl.carousel");
    });
});


$(document).ready(function () {
    var owl = $(".patient-testimonial");
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },

            786: {
                items: 2,
            },
            1240: {
                items: 3,
            },
        },
    });
}); 


$(document).ready(function () {
    var owl = $(".counter-area-carousel");
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },

            786: {
                items: 2,
            },
            1240: {
                items: 3,
            },
        },
    });
});

$(document).ready(function () {
    var owl = $(".speciality-item-carousel");
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                dots: true,
            },

            786: {
                items: 2,
            },
            1240: {
                items: 3,
            },
        },
    });
});

</script>
</body>

</html>