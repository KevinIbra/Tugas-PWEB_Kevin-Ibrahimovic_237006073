// Smooth Scroll for Navbar Links
document.querySelectorAll('.navbar a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// Testimonial Slider
let currentTestimonial = 0;
const testimonials = document.querySelectorAll('.testimoni-2 > p');
const testimonialInterval = 5000; // 5 seconds

function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
        testimonial.style.display = i === index ? 'block' : 'none';
    });
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    showTestimonial(currentTestimonial);
}

setInterval(nextTestimonial, testimonialInterval);
showTestimonial(currentTestimonial);

// Back to Top Button
const backToTopButton = document.createElement('button');
backToTopButton.textContent = '⬆️';
backToTopButton.style.position = 'fixed';
backToTopButton.style.bottom = '20px';
backToTopButton.style.right = '20px';
backToTopButton.style.display = 'none';
backToTopButton.style.padding = '10px';
backToTopButton.style.borderRadius = '50%';
backToTopButton.style.backgroundColor = '#333';
backToTopButton.style.color = '#fff';
backToTopButton.style.border = 'none';
backToTopButton.style.cursor = 'pointer';
document.body.appendChild(backToTopButton);

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Dynamic Year in Footer
const footerYear = document.querySelector('.footer-2 h3');
if (footerYear) {
    const currentYear = new Date().getFullYear();
    footerYear.innerHTML = `&copy; ${currentYear} Kevin Ibrahimovic | Cyber Security`;
}

// Toggle Hamburger Menu
const hamburgerMenu = document.querySelector('.hamburger-menu');
const dropdownMenu = document.querySelector('.dropdown-menu');

hamburgerMenu.addEventListener('click', () => {
    console.log('Hamburger menu clicked');
    dropdownMenu.classList.toggle('active');
});

// Close dropdown menu when a link is clicked
document.querySelectorAll('.dropdown-link').forEach(link => {
    link.addEventListener('click', () => {
        dropdownMenu.classList.remove('active');
    });
});

// Smooth Scroll for Dropdown Menu Links
document.querySelectorAll('.dropdown-menu a').forEach(link => {
    link.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            e.preventDefault();
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

$(document).ready(function () {
    // Toggle dropdown menu saat hamburger menu diklik
    $('.hamburger-menu').on('click', function () {
        $('.dropdown-menu').toggleClass('active');
    });

    // Tutup dropdown menu saat link di dalamnya diklik
    $('.dropdown-link').on('click', function () {
        $('.dropdown-menu').removeClass('active');
    });

    $("#contactForm").on("submit", function (e) {
        e.preventDefault(); // Mencegah pengiriman formulir secara default

        let isValid = true;
        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let message = $("#message").val().trim();

        // Validasi Nama
        if (name === "") {
            alert("Nama tidak boleh kosong.");
            isValid = false;
        }

        // Validasi Email
        if (email === "") {
            alert("Email tidak boleh kosong.");
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert("Format email tidak valid.");
            isValid = false;
        }

        // Validasi Pesan
        if (message === "") {
            alert("Pesan tidak boleh kosong.");
            isValid = false;
        }

        // Jika validasi berhasil
        if (isValid) {
            alert("Formulir berhasil dikirim!");
            // Anda dapat menambahkan logika pengiriman data ke server di sini
            this.reset(); // Reset formulir
        }
    });
});

