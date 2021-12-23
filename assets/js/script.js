const menu_text = document.querySelector(".menu-text");
const menu_btn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");

let show_menu = false;

let toggle_menu = function() {
  if (!show_menu) {
    menu_text.classList.add("close");
    menu_btn.classList.add("close");

    show_menu = true;
  } else {
    menu_text.classList.remove("close");
    menu_btn.classList.remove("close");

    show_menu = false;
  }
};

menu_btn.addEventListener("click", toggle_menu);
