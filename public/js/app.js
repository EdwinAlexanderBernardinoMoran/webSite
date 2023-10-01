const header = document.querySelector("header");
window.addEventListener("scroll", function () {
  header.classList.toggle("sticky", window.scrollY > 100);
});

const icon = document.querySelector("#menu-icon")
const navlist = document.querySelector(".navlist");

icon.onclick = () => {
  // icon.classList.toggle('bx-x');
  if (navlist.classList.toggle('open')) {
    icon.innerText = 'clear'
  } else{
    icon.innerText = 'dehaze'
  }
}

window.onscroll = () => {

  navlist.classList.remove('open')
  icon.innerText = 'dehaze'

}
