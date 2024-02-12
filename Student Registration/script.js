let navbar = document.querySelector('nav');
let menuLinks = document.getElementById("menu-links");

function toggleMenu(){
    menuLinks.classList.toggle('show-menu');
}

window.onscroll = function(){
    if(window.scrollY > 0){
        navbar.style.background = '#eefff9';
    }else{
        navbar.style.background = 'transparent';
    }
} 

document.getElementById("loginBtn").addEventListener("click", function() {
    var form = document.getElementById("loginForm");
    form.style.display = (form.style.display === "none") ? "block" : "none";
  });
  