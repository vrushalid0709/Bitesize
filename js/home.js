const profileLink = document.querySelector('.profile-link');
const dropdownOptions = document.querySelector('.dropdown-options');
const dropdownLinks = document.querySelectorAll('.dropdown-options li a');

profileLink.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default link behavior
    dropdownOptions.classList.toggle('show-dropdown');
    profileLink.classList.toggle('active'); // Toggle active state for highlighting
});

// Close the dropdown when clicking outside
document.addEventListener('click', function(e) {
    if (!profileLink.contains(e.target) && !dropdownOptions.contains(e.target)) {
        dropdownOptions.classList.remove('show-dropdown');
        profileLink.classList.remove('active'); // Remove the highlight
    }
});

// Add highlight for dropdown links when clicked
dropdownLinks.forEach(link => {
    link.addEventListener('click', function() {
        dropdownLinks.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});
