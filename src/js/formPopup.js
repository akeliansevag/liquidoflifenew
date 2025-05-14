const formPopupOverlay = document.querySelector('.form-popup-overlay');
const formPopupClose = document.querySelector('#form-popup-close');

// Pressing ESC key closes popup
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closePopup();
    }
});

if (formPopupOverlay) {
    formPopupOverlay.addEventListener('click', () => {
        closePopup();
    });
}

if (formPopupClose) {
    formPopupClose.addEventListener("click", () => {
        closePopup();
    });
}


const closePopup = () => {
    document.getElementById('form-popup').classList.remove('show');
    sessionStorage.setItem('popupAlreadyShown', 'true');
}

const openPopup = () => {
    document.getElementById('popup').classList.add('show');
}


const formResidential = document.getElementById('form-residential');
const formCorporate = document.getElementById('form-corporate');

if (formResidential) {
    formResidential.addEventListener('click', () => {
        formCorporate.classList.remove('active');
        formResidential.classList.add('active');

        document.getElementById('popup-corporate-form').classList.add('hidden');
        document.getElementById('popup-residential-form').classList.remove('hidden');
    })
}

if (formCorporate) {
    formCorporate.addEventListener('click', () => {
        formResidential.classList.remove('active');
        formCorporate.classList.add('active');

        document.getElementById('popup-residential-form').classList.add('hidden');
        document.getElementById('popup-corporate-form').classList.remove('hidden');
    })
}


document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('form-popup');

    const isHomepage = window.location.pathname === '/' || window.location.pathname === '/index.php';
    const hasSubmitted = localStorage.getItem('popupFormSubmitted') === 'true';
    const popupAlreadyShown = sessionStorage.getItem('popupAlreadyShown') === 'true';

    if (isHomepage && !hasSubmitted && !popupAlreadyShown) {
        setTimeout(() => {
            popup.classList.add('show');
            sessionStorage.setItem('popupAlreadyShown', 'true'); // Don't show again in this session
        }, 3000); // 5 seconds
    }

    // On Contact Form 7 submission
    document.addEventListener('wpcf7mailsent', function (event) {
        if (popup.contains(event.target)) {
            popup.classList.remove('show');
            localStorage.setItem('popupFormSubmitted', 'true'); // Never show again
        }
    }, false);
});