import './menu';
import './swiper';
import './faq';
import './popup';
import './formPopup';

var header = document.querySelector('header');

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

const residential = document.getElementById('residential');
const corporate = document.getElementById('corporate');

if (residential) {
    residential.addEventListener('click', () => {
        corporate.classList.remove('active');
        residential.classList.add('active');

        document.getElementById('corporate-form').classList.add('hidden');
        document.getElementById('residential-form').classList.remove('hidden');
    })
}

if (corporate) {
    corporate.addEventListener('click', () => {
        residential.classList.remove('active');
        corporate.classList.add('active');

        document.getElementById('residential-form').classList.add('hidden');
        document.getElementById('corporate-form').classList.remove('hidden');
    })
}

document.addEventListener("DOMContentLoaded", function () {
    const OFFSET = 100;

    function scrollToHash(hash) {
        if (!hash) return;
        const id = hash.startsWith('#') ? hash : '#' + hash.split('#')[1];
        const target = document.querySelector(id);
        if (target) {
            const top = target.getBoundingClientRect().top + window.scrollY - OFFSET;
            window.scrollTo({ top: top, behavior: 'smooth' });
        }
    }

    // On initial load with hash
    if (window.location.hash) {
        setTimeout(() => {
            scrollToHash(window.location.hash);
        }, 100);
    }

    // Intercept all clicks on links with hashes (even full URLs)
    document.querySelectorAll('a[href*="#"]').forEach(link => {
        link.addEventListener('click', function (e) {
            const url = new URL(this.href);
            const currentUrl = window.location;

            // Same page hash link
            if (
                url.pathname === currentUrl.pathname &&
                url.hostname === currentUrl.hostname &&
                url.hash
            ) {
                e.preventDefault(); // prevent default jump
                history.pushState(null, null, url.hash); // update URL without reload
                scrollToHash(url.hash);
            }
        });
    });
});