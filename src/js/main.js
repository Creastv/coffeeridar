// Header nav menu

(window.load = function (event) {
  const togglerNav = document.querySelector(".toggler-nav");
  const headerNav = document.querySelector(".header-nav");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      headerNav.classList.add("active");
      togglerNav.classList.add("active");
      navFlag = true;
    } else {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    }
  });
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
   

})();