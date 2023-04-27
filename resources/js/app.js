import './bootstrap';
import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();



navLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const targetId = link.getAttribute('#about', '#contacts').substring(1);
        const targetSection = document.getElementById(about, contacts);
        window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth'
        });
    });
});


window.addEventListener("load", function () {
    const preloader = document.querySelector("preloader");
    preloader.classList.add("hidden");
  });
  

