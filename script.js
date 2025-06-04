// js/script.js - For any future JavaScript enhancements.

document.addEventListener("DOMContentLoaded", function() {
    // Smooth scroll to top for question pages if needed, though PHP handles page loads.
    // Example: Animate progress bar if it were more dynamic
    const progressBar = document.querySelector(".progress-bar-animated");
    if (progressBar) {
        const currentWidth = progressBar.style.width;
        progressBar.style.width = "0%"; // Reset for animation effect
        setTimeout(() => {
            progressBar.style.width = currentWidth;
        }, 100); // Small delay to trigger transition
    }

    // Any other client-side enhancements can go here.
    // For example, to ensure the page scrolls to the question after load if there's a fixed header:
    const questionContainer = document.getElementById("assessment-question-container");
    if(questionContainer){
        // Check if header is obscuring content and scroll if necessary
        const header = document.querySelector("header.sticky-top");
        if(header){
            const headerHeight = header.offsetHeight;
            const elementTop = questionContainer.getBoundingClientRect().top;
            if(elementTop < headerHeight){
                 window.scrollBy(0, elementTop - headerHeight - 15); // scroll down by the difference plus a small margin
            }
        }
    }
});

function goBack() {
    window.history.back();
}

