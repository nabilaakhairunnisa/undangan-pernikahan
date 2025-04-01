//nama penerima - handle spaces with "+"
const urlParams = new URLSearchParams(window.location.search);
const nama = urlParams.get('to');
if (nama) {
    document.getElementById('nama').textContent = nama.replace(/\+/g, ' ');
}

//musik
function enableAudio() {
    const audio = document.getElementById('background-audio');
    if (audio) {
        audio.muted = false;
        audio.play();
    }
}

// Function to open the invitation
function openInvitation() {
    document.getElementById('hero-section').style.display = 'none';
    document.querySelector('.main-content').style.display = 'block';
    document.querySelector('.bottom-nav').style.display = 'flex';
    enableAudio();

    // Trigger animations after content is shown
    animateMempelai();
    animateGallery();
    animateOnScroll();

    // Prevent default anchor behavior to avoid jumping
    return false;
}

function animateMempelai() {
    setTimeout(() => {
        document.querySelector('.mempelai-pria').classList.add('show');
    }, 300);
    setTimeout(() => {
        document.querySelector('.mempelai-wanita').classList.add('show');
    }, 600);
}

// Animation for gallery photos
function animateGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add('show');
        }, 300 * (index + 1)); // Stagger the animation
    });
}

// Animation on scroll for other elements
function animateOnScroll() {
    const elements = document.querySelectorAll('.animate');
    const windowHeight = window.innerHeight;

    elements.forEach(element => {
        const position = element.getBoundingClientRect().top;
        if (position < windowHeight - 50 && position > -50) {
            element.classList.add('show');
        } else {
            element.classList.remove('show');
        }
    });
}

// Handle form submission to prevent page reload/jump
document.addEventListener('DOMContentLoaded', function () {
    const wishesForm = document.getElementById('wishes-form');
    if (wishesForm) {
        wishesForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            const formData = new FormData(this);

            // Use fetch to submit the form asynchronously
            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    if (response.ok) {
                        // Clear form fields after successful submission
                        wishesForm.reset();
                        const newWish = document.createElement('div');
                        newWish.classList.add('wish-item');
                        newWish.innerHTML = `
                                    <p class="name">${formData.get('name')}</p>
                                    <p>${formData.get('message')}</p>
                                    <p class="date">${new Date().toLocaleString('id-ID', { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' })}</p>
                                    <hr class="white-line">`;
                        // Tambahkan ucapan baru ke bagian atas daftar
                        const wishesList = document.querySelector('.wishes-list');
                        wishesList.insertBefore(newWish, wishesList.firstChild);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    }
});

// Initialize animations
window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', function () {
    // Check if there's a fragment in URL that matches a section id
    if (window.location.hash && window.location.hash !== "#couple") {
        // If yes, trigger open invitation automatically
        openInvitation();
        // Then scroll to the requested section
        setTimeout(() => {
            document.querySelector(window.location.hash).scrollIntoView();
        }, 200);
    }
});

// Handle the "Open Invitation" button click
document.getElementById('open-invitation').addEventListener('click', function (e) {
    e.preventDefault();
    openInvitation();
});