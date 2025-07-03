function showContent(section) {
    const contentSection = document.getElementById('content-section');
    let content = '';

    switch (section) {
        case 'reviews':
            content = `
                <h3>Customer Reviews</h3>
                <p>⭐⭐⭐⭐⭐ - "Amazing food and atmosphere!"</p>
                <p>⭐⭐⭐⭐ - "Great service, but a bit pricey."</p>
                <p>⭐⭐⭐⭐⭐ - "Best pasta in town!"</p>
            `;
            break;
        case 'photos':
            content = `
                <h3>Photos Gallery</h3>
                <img src="../images/resto.avif" alt="Restaurant View" style="width: 200px; margin: 10px;">
                <img src="../images/home-burger.png" alt="Burger" style="width: 200px; margin: 10px;">
                <img src="../images\cheese5.jpg" alt="Spaghetti" style="width: 200px; margin: 10px;">
            `;
            break;
        case 'bookTable':
            content = `
                <h3>Book a Table</h3>
                <p>To book a table, please call: <strong>123-456-7890</strong></p>
                <p>Or visit our reservation page.
                <button href="dine in\booking.php">
                BOOK NOW
                </button>
                </p>
            `;
            break;
        case 'gallery':
            content = `
                <h3>Full Gallery</h3>
                <p>Explore our full gallery of restaurant photos.</p>
            `;
            break;
        default:
            content = '<p>Select an option above to see the content here.</p>';
            break;
    }

    contentSection.innerHTML = content;
}

