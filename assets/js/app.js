//nav button active states
$("#nav-btn").click(function(){
    $("#nav-btn").toggleClass("nav-btn-active");
    $("#nav-menu").toggleClass("nav-menu-active");
})

///Intersection Observer
const navbar = document.querySelector(".nav-container");
const hero = document.querySelector(".hero-text");
const options = {
    threshold: [0.9],
   rootMargin: "-125px 0px 0px 0px",
};

const heroobserver = new IntersectionObserver(function(entries, heroobserver) {
    entries.forEach(entry =>{
        if(!entry.isIntersecting){
            navbar.classList.add("nav-scrolled");
        }
        else{
            navbar.classList.remove("nav-scrolled");
        }
    });
},options);
heroobserver.observe(hero);
/////////////////////////////

