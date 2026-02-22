

AOS.init();

window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    // const content = document.querySelector(".content");

    setTimeout(() => {
        preloader.classList.add("hide");
        // content.style.display = "block";
    }, 2000); // 2 seconds delay
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
    btn.addEventListener("click", function (e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            const parent = this.closest(".custom-dropdown");
            parent.classList.toggle("active");

            const menu = parent.querySelector(".custom-dropdown-menu");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        }
    });
});