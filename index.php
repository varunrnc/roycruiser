<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Roy Cruiser | Self Drive Guided Road Trips | Road Trips | International Road Trips</title>
  <meta name="description" content="Roy Cruiser organises Self Drive Guided Road Trips across India and Internationally as well.
We have expertises of Off Road, Himalayan, snow , wildlife and cross border Adventures and road trips.">
  <?php include_once('./header-links.php') ?>
</head>

<body>
  <!-- Navigation -->
  <?php include_once('./navbar.php') ?>

  <!-- Slider Section -->
  <?php include_once('./includes/sliders.php') ?>

  <!-- Trusted Section -->
  <?php include_once('./includes/truste.php') ?>

  <!-- Fixed Departures Section -->
  <?php include_once('./includes/fixed-departures.php') ?>

  <!-- What's Trending Section -->
  <?php include_once('./includes/trending.php') ?>

  <!-- Awards Section -->
  <?php include_once('./includes/awards.php') ?>

  <!-- Partner Section -->
  <?php include_once('./includes/partners.php') ?>


  <!-- Testimonial Section  -->
  <?php include_once('./includes/testimonials.php') ?>

  <!-- why choose us Section  -->
  <?php include_once('./includes/why-choose-us.php') ?>

  <!-- rc-standard Section  -->
  <?php include_once('./includes/rc-standard.php') ?>

  <section class="hero-section d-flex align-items-end">
    <div class="overlay"></div>

    <div class="container text-center hero-content" data-aos="fade-up">
      <h2 class="hero-title">500000+ KM Driven Across Multiple Countries</h2>
      <a href="roy-cruiser.php" class="btn-read-more">Explore Now</a>
    </div>
  </section>
  <section class="hero-section2 d-flex align-items-end">
    <div class="overlay2"></div>
  </section>

  <!-- footer  -->
  <?php include_once('./footer.php'); ?>

  <?php include_once('./footer-links.php'); ?>

  <script src="./js/script.js"></script>
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    let autoSlideInterval;

    // Initialize slider
    function initSlider() {
      // console.log('Initializing slider with', slides.length, 'slides');
      showSlide(currentSlide);
      startAutoSlide();
    }

    // Show specific slide
    function showSlide(index) {
      // console.log('Showing slide', index);

      // Remove active class and reset animation from all slides
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        const slideImage = slide.querySelector('.slide-image');
        if (slideImage) {
          slideImage.style.animation = 'none';
        }
      });

      indicators.forEach(indicator => indicator.classList.remove('active'));

      // Force reflow to restart animation
      void slides[index].offsetWidth;

      // Add active class to current slide and indicator
      slides[index].classList.add('active');
      indicators[index].classList.add('active');

      // Start zoom animation
      const currentSlideImage = slides[index].querySelector('.slide-image');
      if (currentSlideImage) {
        currentSlideImage.style.animation = 'zoomOut 3s ease-out forwards';
      }
    }

    // Change slide
    function changeSlide(direction) {
      currentSlide += direction;

      // Loop back to start/end
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      } else if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }

      showSlide(currentSlide);
      resetAutoSlide();
    }

    // Go to specific slide
    function goToSlide(index) {
      currentSlide = index;
      showSlide(currentSlide);
      resetAutoSlide();
    }

    // Auto slide functionality
    function startAutoSlide() {
      autoSlideInterval = setInterval(() => {
        changeSlide(1);
      }, 5000); // Change slide every 5 seconds (3s zoom out + 2s display)
    }

    // Reset auto slide timer
    function resetAutoSlide() {
      clearInterval(autoSlideInterval);
      startAutoSlide();
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        changeSlide(-1);
      } else if (e.key === 'ArrowRight') {
        changeSlide(1);
      }
    });

    // Touch/Swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    document.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    });

    document.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    });

    function handleSwipe() {
      if (touchEndX < touchStartX - 50) {
        // Swipe left
        changeSlide(1);
      }
      if (touchEndX > touchStartX + 50) {
        // Swipe right
        changeSlide(-1);
      }
    }

    // Pause auto-slide on hover
    const sliderContainer = document.querySelector('.slider-container');

    sliderContainer.addEventListener('mouseenter', () => {
      clearInterval(autoSlideInterval);
    });

    sliderContainer.addEventListener('mouseleave', () => {
      startAutoSlide();
    });

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', initSlider);

    // Handle video loading
    const video = document.getElementById('bgVideo');
    if (video) {
      video.addEventListener('loadeddata', () => {
        console.log('Background video loaded successfully');
      });

      video.addEventListener('error', () => {
        console.log('Video failed to load, using fallback');
        // Optionally add a fallback background image
      });
    }

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Add animation to content when slide becomes active
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
        }
      });
    }, {
      threshold: 0.5
    });

    slides.forEach(slide => {
      observer.observe(slide);
    });



    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 10,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".slider-next",
        prevEl: ".slider-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 4,
        }
      }
    });

    var swiper = new Swiper(".myTestimonialSwiper", {
      slidesPerView: 4,
      spaceBetween: 10, // EXACT 10px gap
      loop: true,
      centeredSlides: false,

      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

      navigation: {
        nextEl: ".slider-next",
        prevEl: ".slider-prev",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 10
        }
      }
    });
  </script>
</body>

</html>