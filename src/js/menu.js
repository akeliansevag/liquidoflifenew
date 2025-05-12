const burgerBtn = document.querySelector('#burger-btn');
const menuCloseBtn = document.querySelector('#menu-close-btn');
const bodyEl  = document.querySelector('body');
const menuOverlay = document.querySelector('#mobile-menu-overlay');

burgerBtn.addEventListener('click',() => openMenu());
menuCloseBtn.addEventListener('click', () => closeMenu());
menuOverlay.addEventListener('click',() => closeMenu());

const openMenu = () => bodyEl.classList.add('open');
const closeMenu = () => bodyEl.classList.remove('open');
