const navMobile = () => {
  const mobile_nav = document.querySelector(".mobile-nav");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");
  const mobile_socialMedia = document.querySelectorAll(
    ".nav-links .mobile-socialMedia"
  );

  // Mobile menu on/off
  mobile_nav.addEventListener("click", () => {
    nav.classList.toggle("nav-on");

    // social medias to mobile menu
    mobile_socialMedia.forEach((sMedia) => {
      sMedia.classList.toggle("mobile-mediaOn");
    });

    // Links appearing from right to left
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 5 + 0.5
        }s`;
      }
    });

    mobile_nav.classList.toggle("close");
  });
};

navMobile();

$(document).ready(function () {
  $("a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        100,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });
});
