let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const indicators = document.querySelectorAll('.indicator');
let autoSlideInterval;

AOS.init();

window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    // const content = document.querySelector(".content");

    setTimeout(() => {
        preloader.classList.add("hide");
        // content.style.display = "block";
    }, 2000); // 2 seconds delay
});


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
    anchor.addEventListener('click', function (e) {
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

// footer current year 
document.getElementById('year').textContent = new Date().getFullYear()

const backToTop = document.getElementById("backToTop");

// Show button after scrolling 300px
window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
        backToTop.style.display = "block";
    } else {
        backToTop.style.display = "none";
    }
});

// Smooth scroll to top
backToTop.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});


// navbar
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".custom-navbar");

    if (window.scrollY > 80) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

document.querySelectorAll(".dropdown-toggle-btn").forEach(btn => {
    btn.addEventListener("click", function(e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            const parent = this.closest(".custom-dropdown");
            parent.classList.toggle("active");

            const menu = parent.querySelector(".custom-dropdown-menu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }
    });
});