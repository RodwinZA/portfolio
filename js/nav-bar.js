const toggleButton = document.querySelector(".toggle-button");
const navbarLinks = document.querySelectorAll(".navbar-links")[0];

toggleButton.addEventListener("click", () => {
  navbarLinks.classList.toggle("active");
});