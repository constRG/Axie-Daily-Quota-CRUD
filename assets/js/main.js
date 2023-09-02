const scroll_to_top_arrow = document.querySelector("#scroll_to_top_arrow");

window.addEventListener('scroll', checkHeight)

function checkHeight(){
    if(window.scrollY > 500) {
        scroll_to_top_arrow.classList.add("scroll_to_top_arrow_active")
    }
     else {
         scroll_to_top_arrow.classList.remove("scroll_to_top_arrow_active")
     }
}

scroll_to_top_arrow.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});



