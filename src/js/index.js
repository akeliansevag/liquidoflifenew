import './menu';
import './swiper';
import './faq';
import './popup';

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

if(residential){
    residential.addEventListener('click',()=>{
        corporate.classList.remove('active');
        residential.classList.add('active');

        document.getElementById('corporate-form').classList.add('hidden');
        document.getElementById('residential-form').classList.remove('hidden');
    })
}

if(corporate){
    corporate.addEventListener('click',()=>{
        residential.classList.remove('active');
        corporate.classList.add('active');

        document.getElementById('residential-form').classList.add('hidden');
        document.getElementById('corporate-form').classList.remove('hidden');
    })
}