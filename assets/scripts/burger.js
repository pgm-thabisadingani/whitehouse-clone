document.addEventListener("DOMContentLoaded", () => {
  const open_menu = document.querySelector(".open-mobile");
  const open_menu_side = document.querySelector(".open-mobile-side");
  const menu_mobile = document.querySelector(".menu-mobile");
  const close_menu = document.querySelector(".close-mobile");

  const header = document.querySelector(".header-container");

  open = () => {
    menu_mobile.classList.add("hidden");
    console.log("open");
  };

  close = () => {
    menu_mobile.classList.remove("hidden");
  };

  hello = () => {
    console.log("hello");
  };

  close_menu?.addEventListener("click", close);
  open_menu?.addEventListener("click", open);
  open_menu_side?.addEventListener("click", open);

  // if (window.scrollY > header.offsetHeight + 150) {
  //   nav.classList.add("active");
  // } else {
  //   nav.classList.remove("active");
  // }
});
