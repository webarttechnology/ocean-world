// Select the header element
const header = document.getElementById('site-header');
const container = document.getElementById('site-container');
const topHeader = document.getElementById('top-header');

// Function to handle scroll event
function handleScroll() {
  // Check the vertical scroll position
  const scrollPosition = window.scrollY || window.pageYOffset;

  // Define the scroll threshold when the background color should change
  const scrollThreshold = 100; // Adjust this value as needed

  // Add or remove a CSS class based on scroll position
  if (scrollPosition > scrollThreshold) {
    topHeader.classList.add('scrolled');
    container.classList.remove('container');
  } else {
    topHeader.classList.remove('scrolled');
    container.classList.add('container');
  }
}

// Add scroll event listener to the window
window.addEventListener('scroll', handleScroll);


