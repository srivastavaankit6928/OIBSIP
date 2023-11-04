const slideContainer = document.querySelector('.slide');

let count = 0;
let direction = true;

function sliderFunc() {
    const screenWidth = window.innerWidth;

    if (screenWidth >= 280 && screenWidth <= 480) {
        slideContainer.style.scrollBehavior = 'smooth';
        direction ? slideContainer.scrollLeft += 350 : slideContainer.scrollLeft -= 350; 
    }else{
    (count % 2 === 0) &&  (direction = !direction);

    slideContainer.style.scrollBehavior = 'smooth';
    direction ? slideContainer.scrollLeft += 600 : slideContainer.scrollLeft -= 600;   

    count++;}
}

setInterval(sliderFunc,5000);

