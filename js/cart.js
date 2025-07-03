const cartItemsContainer = document.querySelector('.cart-table tbody');
const totalPriceElement = document.getElementById('total-price');
const emptyCartElement = document.getElementById('empty-cart');
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function loadCart() {
    cartItemsContainer.innerHTML = '';  // Clear existing cart items
    let totalPrice = 0;

    if (cart.length === 0) {
        // Show empty cart view
        emptyCartElement.style.display = 'block';
        document.querySelector('.cart-table').style.display = 'none';
        document.querySelector('.cart-summary').style.display = 'none';
    } else {
        // Show cart with items
        emptyCartElement.style.display = 'none';
        document.querySelector('.cart-table').style.display = 'block';
        document.querySelector('.cart-summary').style.display = 'block';

        cart.forEach(item => {
            const itemTotalPrice = (item.price * item.quantity).toFixed(2);
            totalPrice += parseFloat(itemTotalPrice);

            const cartRow = document.createElement('tr');

            cartRow.innerHTML = `
                <td><img src="item-image-placeholder.png" alt="${item.name}" /></td>
                <td>${item.name}</td>
                <td>$${item.price}</td>
                <td>
                    <button class="quantity-decrease" data-id="${item.id}">-</button>
                    <span>${item.quantity}</span>
                    <button class="quantity-increase" data-id="${item.id}">+</button>
                </td>
                <td>$${itemTotalPrice}</td>
                <td><button class="remove-item" data-id="${item.id}">Remove</button></td>
            `;

            cartItemsContainer.appendChild(cartRow);

            // Event listeners for remove and quantity buttons
            cartRow.querySelector('.remove-item').addEventListener('click', () => {
                removeFromCart(item.id);
            });

            cartRow.querySelector('.quantity-decrease').addEventListener('click', () => {
                updateQuantity(item.id, -1);
            });

            cartRow.querySelector('.quantity-increase').addEventListener('click', () => {
                updateQuantity(item.id, 1);
            });
        });

        totalPriceElement.textContent = totalPrice.toFixed(2);
    }
}

function removeFromCart(id) {
    cart = cart.filter(item => item.id !== id);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function updateQuantity(id, delta) {
    const item = cart.find(item => item.id === id);
    if (item) {
        item.quantity += delta;
        if (item.quantity <= 0) {
            removeFromCart(id);
        } else {
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }
    }
}

// Load the cart when the page loads
loadCart();
