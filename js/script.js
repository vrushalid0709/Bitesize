document.addEventListener('DOMContentLoaded', function() {
    const slide = document.getElementById("slide");
    const upArrow = document.getElementById("upArrow");
    const downArrow = document.getElementById("downArrow");

    let x = 0;
    const slideHeight = 300; 
    const totalSlides = 4; 
    const maxTop = 0; 
    const maxBottom = -slideHeight * (totalSlides - 1); 

    upArrow.onclick = function() {
        if (x < maxTop) { 
            x += slideHeight;
            slide.style.top = x + "px";
        }
    }

    downArrow.onclick = function() {
        if (x > maxBottom) { 
            x -= slideHeight;
            slide.style.top = x + "px";
        }
    }
});
