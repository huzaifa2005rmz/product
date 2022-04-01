const navbar = document.getElementById("navbar"),
addHeigthBtn = document.getElementById("add-height"),
removeHeigthBtn = document.getElementById("remove-height"),
maxHeigth = document.getElementById("max-height-slide");


//    nav scroll hiden 
var navScroll = 0;

window.addEventListener("scroll", function(){
    var scrollTpo = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTpo > navScroll){
      navbar.style.top = "-100px"
    }else{
        navbar.style.top = "0"
    }
    navScroll = scrollTpo
})

addHeigthBtn.onclick = () =>{
  maxHeigth.style.height += "1055px";
}

