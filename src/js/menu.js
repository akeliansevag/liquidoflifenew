const burgerBtn = document.querySelector('#burger-btn');
const menuCloseBtn = document.querySelector('#menu-close-btn');
const bodyEl = document.querySelector('body');
const menuOverlay = document.querySelector('#mobile-menu-overlay');
const menuContent = document.querySelector('#mobile-menu-content');

burgerBtn.addEventListener('click', () => openMenu());
menuCloseBtn.addEventListener('click', () => closeMenu());
menuOverlay.addEventListener('click', () => closeMenu());

const openMenu = () => bodyEl.classList.add('open');
const closeMenu = () => bodyEl.classList.remove('open');

const menuLinks = menuContent.querySelectorAll('a');
menuLinks.forEach(link => {
    link.addEventListener('click', () => closeMenu());
});