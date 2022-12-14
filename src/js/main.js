// Header nav menu
(window.load = function (event) {
  const togglerNav = document.querySelector(".toggler-nav");
  const headerNav = document.querySelector(".header-nav");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      headerNav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("#header").classList.add("active");
      navFlag = true;
    } else {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("#header").classList.remove("active");
      navFlag = false;
    }
  });

  // Close after click the navmenu on mobile
  const itemsNAv = document.querySelectorAll('.header-nav a')
  for(let i = 0; i < itemsNAv.length; i++){
    console.log(itemsNAv[1]);
    itemsNAv[i].addEventListener("click", () => {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    });
  }

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("go-to-to-active");
    } else {
      goToTop.classList.remove("go-to-to-active");
    }
  });

  // sticy nabvbar
  const navbar = document.querySelector(".navbar");
   document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
       navbar.classList.add("active");
    } else {
      navbar.classList.remove("active");
    }
  });

// sticky stickiers
  const sti = document.querySelector(".stickiers");
   document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
       sti.classList.add("active");
    } else {
      sti.classList.remove("active");
    }
  });
   
const modalOpener = document.querySelector('.modal-opener');
console.log(modalOpener)
const modalCloser = document.querySelector('.modal-closer');
const modal = document.querySelector('.modal-appointment ');

modalOpener.addEventListener("click", (event) => { 
  event.preventDefault()
  modal.classList.add("modal-display");
  document.body.style.overflow = "hidden";
});
modalCloser.addEventListener("click", (event) => { 
  event.preventDefault()
  modal.classList.remove("modal-display");
   document.body.style.overflow = null;
});

})();

