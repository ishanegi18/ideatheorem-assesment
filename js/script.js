

gsap.registerPlugin(ScrollTrigger);



const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

navbarToggler.addEventListener('click', function() {
  navbarToggler.classList.toggle('active');
  navbarCollapse.classList.toggle('show');
});





// animations


gsap.from(".hero-content", {
  x: "-100%",
  duration: 1.2,
  ease: "power1.out",
});

gsap.from("header", {
  y: "-100%",
  duration: 1.2,
  ease: "power1.out",
});

