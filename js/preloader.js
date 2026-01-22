window.addEventListener('load', function () {
    // Minimum display time to prevent flashing (optional, can be removed)
    // const minTime = 500; 

    // Add 'loaded' class to body to trigger CSS transitions
    document.body.classList.add('loaded');

    // Remove the element from DOM after transition completes to ensure it doesn't block interactions
    setTimeout(function () {
        var preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.display = 'none';
        }
    }, 500); // Matches the css transition time of 0.5s
});
