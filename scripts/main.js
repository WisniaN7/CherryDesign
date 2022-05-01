let menuButton = document.querySelector('#menu-button')
let menu = document.querySelector('#menu');
let toggleStatus = 0;

window.onload = function () {
  if (window.innerWidth >= 768) {
    menu.classList.add('menu-visible');
    menu.classList.remove('menu-hidden');
  } else {
    menu.classList.remove('menu-visible');
    menu.classList.add('menu-hidden');
  }
}

window.onresize = function () {
  if (window.innerWidth >= 768) {
    menuButton.classList.add('menu-active');
    menu.classList.add('menu-visible');
    menu.classList.remove('menu-hidden');
  } else {
    menuButton.classList.remove('menu-active');
    menu.classList.remove('menu-visible');
    menu.classList.add('menu-hidden');
  }
}

function toggleMenu() {
  if (window.innerWidth <= 768) {
    if (toggleStatus == 0) {
      menuButton.classList.add('menu-active');
      menu.classList.add('menu-visible');
      menu.classList.remove('menu-hidden');
      toggleStatus = 1;
    } else {
      menuButton.classList.remove('menu-active');
      menu.classList.add('menu-hidden');
      menu.classList.remove('menu-visible');
      toggleStatus = 0;
    }
  } else {
    menu.classList.add('menu-visible');
    menu.classList.remove('menu-hidden');
  }
}



window.onscroll = function() {
  let contentBox = document.getElementById('contentBox').getBoundingClientRect().top;
  console.log(contentBox);
  if (contentBox - 75 <= 0 && window.innerWidth >= 768) {
    header.classList.add('header-colored');
    header.classList.remove('header-transparent');
  } else if (contentBox - 60 <= 0 && window.innerWidth <= 768) {
    header.classList.add('header-colored');
    header.classList.remove('header-transparent');
  } else {
    header.classList.remove('header-colored');
    header.classList.add('header-transparent');
  }
}


let iconTxt = document.getElementById('icon-txt');

function iconIn() {
  iconTxt.classList.remove('icon-txt-out');
  iconTxt.classList.add('icon-txt-in');
}

function iconOut() {
  iconTxt.classList.add('icon-txt-out');
  iconTxt.classList.remove('icon-txt-in');
}
