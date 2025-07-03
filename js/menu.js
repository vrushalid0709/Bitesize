let currentIndex = 0;

function moveSlide(direction) {
    const slides = document.querySelector('.slider');
    const totalSlides = document.querySelectorAll('.slide').length;
    const slideWidth = document.querySelector('.slide').offsetWidth;
    
    // Update the current index based on the direction
    currentIndex += direction;

    // Wrap around logic
    if (currentIndex < 0) {
        currentIndex = totalSlides - 5; // Set to the last fully visible slide group (5th item when displaying 5 slides)
    } else if (currentIndex > totalSlides - 5) { 
        currentIndex = 0; // Reset to the first slide if we reach the end
    }

    // Apply the translation to the slider
    slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

// Event listeners for previous and next buttons
document.querySelector('.prev').addEventListener('click', function() {
    moveSlide(-1); // Move slide left
});

document.querySelector('.next').addEventListener('click', function() {
    moveSlide(1); // Move slide right
});


