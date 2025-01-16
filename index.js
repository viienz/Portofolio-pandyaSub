// Dynamic Typing Effect
const dynamicText = document.querySelector('.dynamic-text');
const texts = ['Devin Pandya'];
let index = 0;

function typeText(text) {
    dynamicText.innerHTML = ''; 
    let i = 0;

    const typingInterval = setInterval(() => {
        if (i < text.length) {
            dynamicText.innerHTML += text.charAt(i);
            i++;
        } else {
            clearInterval(typingInterval);
            setTimeout(() => {
                index = (index + 1) % texts.length;
                typeText(texts[index]);
            }, 2000);
        }
    }, 150); // Lebih cepat untuk efek modern
}

typeText(texts[index]);

// Tambahkan efek scroll pada navbar
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled'); // Tambahkan kelas "scrolled"
    } else {
        navbar.classList.remove('scrolled'); // Hapus kelas "scrolled"
    }
});

// Tab Navigation
function showTab(tabName) {
    const contents = document.querySelectorAll('.tab-content');
    contents.forEach(content => {
        content.classList.remove('active');
        content.style.display = 'none';
    });

    const activeContent = document.getElementById(tabName);
    activeContent.style.display = 'block';
    setTimeout(() => {
        activeContent.classList.add('active');
    }, 10);

    const buttons = document.querySelectorAll('.tab-button');
    buttons.forEach(button => {
        button.classList.remove('active');
    });
    document.querySelector(`.tab-button[onclick="showTab('${tabName}')"]`).classList.add('active');
}

function toggleContent(contentId) {
    // Menyembunyikan semua konten
    const contentItems = document.querySelectorAll('.content-item');
    contentItems.forEach(item => {
      item.style.display = 'none';
    });
  
    // Menampilkan konten yang diklik
    const selectedContent = document.getElementById(contentId);
    if (selectedContent) {
      selectedContent.style.display = 'block';
    }
  }
  

// Portfolio Slider
let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.portfolio-item');
    const totalSlides = slides.length;

    currentSlide += direction;

    if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    } else if (currentSlide >= totalSlides) {
        currentSlide = 0;
    }
    const slider = document.querySelector('.portfolio-slider');
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Drag and Drop Functionality for Portfolio
const gambar = document.querySelector('.gambar');
let currentIndex = 2;
let isDragging = false;
let startX = 0;
let currentTranslate = 0;
let previousTranslate = 0;
let animationID;

function setPositionByIndex() {
    const cards = document.querySelectorAll('.kartu');
    cards.forEach((kartu, index) => {
        kartu.style.transition = 'transform 0.5s ease, opacity 0.5s ease';
        const offset = index - currentIndex;
        switch (offset) {
            case -2:
                kartu.style.transform = 'translateX(-300px) rotateY(30deg)';
                kartu.style.opacity = '0';
                break;
            case -1:
                kartu.style.transform = 'translateX(-150px) rotateY(15deg)';
                kartu.style.opacity = '0.5';
                break;
            case 0:
                kartu.style.transform = 'translateX(0) scale(1.1)';
                kartu.style.opacity = '1';
                break;
            case 1:
                kartu.style.transform = 'translateX(150px) rotateY(-15deg)';
                kartu.style.opacity = '0.5';
                break;
            case 2:
                kartu.style.transform = 'translateX(300px) rotateY(-30deg)';
                kartu.style.opacity = '0';
                break;
            default:
                kartu.style.opacity = '0';
        }
    });
}

gambar.addEventListener('mousedown', startDragging);
gambar.addEventListener('mouseup', stopDragging);
gambar.addEventListener('mousemove', drag);

gambar.addEventListener('touchstart', startDragging);
gambar.addEventListener('touchend', stopDragging);
gambar.addEventListener('touchmove', drag);

function startDragging(event) {
    isDragging = true;
    startX = getPositionX(event);
    animationID = requestAnimationFrame(animation);
    gambar.classList.add('grabbing');
}

function stopDragging() {
    isDragging = false;
    cancelAnimationFrame(animationID);
    gambar.classList.remove('grabbing');

    const movedBy = currentTranslate - previousTranslate;
    if (movedBy < -100) {
        currentIndex = (currentIndex + 1) % gambar.children.length;
    }
    if (movedBy > 100) {
        currentIndex = (currentIndex - 1 + gambar.children.length) % gambar.children.length;
    }

    setPositionByIndex();
    previousTranslate = currentIndex * -window.innerWidth / 2;
}

function drag(event) {
    if (isDragging) {
        const currentPosition = getPositionX(event);
        currentTranslate = previousTranslate + currentPosition - startX;
    }
}

function getPositionX(event) {
    return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
}

function animation() {
    if (isDragging) {
        setPositionByIndex();
    }
    requestAnimationFrame(animation);
}

setPositionByIndex();

// Initialize AOS
AOS.init({
    duration: 800, // Durasi animasi
    easing: 'ease-in-out', // Efek animasi
});

// Animasi Scroll untuk Setiap Bagian
const sections = document.querySelectorAll('.section');

window.addEventListener('scroll', () => {
    const triggerBottom = window.innerHeight * 0.8;

    sections.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        if (sectionTop < triggerBottom) {
            section.classList.add('visible');
        } else {
            section.classList.remove('visible');
        }
    });
});

// Motivator Hover Deskripsi
const photo = document.querySelector('.motivator-photo img');
const description = document.querySelector('.photo-description');

photo.addEventListener('mouseenter', () => {
    description.style.opacity = 1;
});

photo.addEventListener('mouseleave', () => {
    description.style.opacity = 0;
});


// Skill Aplikasi Animasi
// Animasi untuk Skill Icons
const skillItems = document.querySelectorAll('.skill-item');

skillItems.forEach((item) => {
    item.addEventListener('mouseenter', () => {
        const icon = item.querySelector('.skill-icon');
        icon.classList.add('rotate');
    });

    item.addEventListener('mouseleave', () => {
        const icon = item.querySelector('.skill-icon');
        icon.classList.remove('rotate');
    });
});


// Timeline Animation
const timelineItems = document.querySelectorAll('.timeline-item');
window.addEventListener('scroll', () => {
    timelineItems.forEach((item) => {
        const rect = item.getBoundingClientRect();
        if (rect.top < window.innerHeight * 0.8) {
            item.style.transform = 'translateY(0)';
            item.style.opacity = '1';
        } else {
            item.style.transform = 'translateY(50px)';
            item.style.opacity = '0';
        }
    });
});


