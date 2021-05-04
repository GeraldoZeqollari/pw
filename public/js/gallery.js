const selectedButton = () => {
  const allCategories = document.querySelectorAll(".notActive");
  const displayedGalleries = document.querySelectorAll(".art-gallery");

  console.log(displayedGalleries);

  allCategories.forEach((link, index) => {
    link.addEventListener("click", () => {
      allCategories.forEach((link, index) => {
        link.classList.remove("selected-button");
      });
      link.classList.add("selected-button");
      switch (link.textContent) {
        case "Realism":
          changeDisplay(displayedGalleries, link.textContent.toLowerCase());
          break;
        case "Modern Art":
            let temp = 'Modern';
          changeDisplay(displayedGalleries, temp.toLowerCase());
          break;
        case "Medieval Art":
            let temp1 = 'Medieval';
          changeDisplay(displayedGalleries, temp1.toLowerCase());
          break;
        case "Baroque":
          changeDisplay(displayedGalleries, link.textContent.toLowerCase());
          break;
        default:
          break;
      }
    });
  });
};

function changeDisplay(displayedGalleries, name) {
  displayedGalleries.forEach((element) => {
    if ($(element).hasClass(name)) {
      element.style.display = "grid";
    } else {
      element.style.display = "none";
    }
  });
}

const addToFavorites = () => {
  const likeThis = document.querySelectorAll(".notLiked");

  likeThis.forEach((button, index) => {
    button.addEventListener("click", () => {
      button.classList.toggle("liked");
    });
  });
};

addToFavorites();
selectedButton();
