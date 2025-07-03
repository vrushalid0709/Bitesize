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
                <img src="restaurant.jpg" alt="Restaurant View" style="width: 200px; margin: 10px;">
                <img src="burger.jpg" alt="Burger" style="width: 200px; margin: 10px;">
                <img src="spaghetti.jpg" alt="Spaghetti" style="width: 200px; margin: 10px;">
            `;
            break;
        case 'menu':
            content = `
                <h3>Menu</h3>
                <ul>
                    <li>Spaghetti Bolognese - ₹250</li>
                    <li>Grilled Chicken Burger - ₹180</li>
                    <li>Penne Pesto - ₹220</li>
                </ul>
            `;
            break;
        case 'bookTable':
            content = `
                <h3>Book a Table</h3>
                <p>To book a table, please call: <strong>123-456-7890</strong></p>
                <p>Or visit our reservation page.
                <a href= book.php>Book now </a>
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
