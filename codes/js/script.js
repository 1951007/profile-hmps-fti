// toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// ketika menu di klick
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klick di luar slbar untuk menghilangkan nav
const tentang = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!tentang.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
