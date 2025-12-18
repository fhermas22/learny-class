/**
 * Cart System - LearnyClass
 * Manages the addition, deletion, and persistence of cart items
 */

// Initialize the shopping cart on load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
});

/**
 * Add a course to cart
 * @param {string} id - Course ID
 * @param {string} title - Course title
 * @param {number} price - Course price
 * @param {string} image - Image URL
 * @param {string} instructor - Instructor name
 */
function addToCart(id, title, price, image, instructor) {
    // Retrieve the current basket
    let cart = JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');

    // Check if the course is already in the cart
    const existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        alert('Ce cours est déjà dans votre panier!');
        return;
    }

    // Add the new course
    cart.push({
        id: id,
        title: title,
        price: parseFloat(price),
        image: image,
        instructor: instructor
    });

    // Save to localStorage
    localStorage.setItem('learnyclass_cart', JSON.stringify(cart));

    // Display a confirmation message
    showNotification(`"${title}" a été ajouté au panier!`);

    // Update the counter
    updateCartCount();

    // Issue a custom event
    window.dispatchEvent(new Event('cartUpdated'));
}

/**
 * Remove a course from the cart
 * @param {string} courseId - ID of the course to remove
 */
function removeFromCart(courseId) {
    let cart = JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');
    cart = cart.filter(item => item.id !== courseId);
    localStorage.setItem('learnyclass_cart', JSON.stringify(cart));
    updateCartCount();
    window.dispatchEvent(new Event('cartUpdated'));
}

/**
 * Empty the basket completely
 */
function clearCart() {
    localStorage.removeItem('learnyclass_cart');
    updateCartCount();
    window.dispatchEvent(new Event('cartUpdated'));
}

/**
 * Update the cart counter
 */
function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');
    const count = cart.length;
    const countElement = document.getElementById('cart-count');

    if (countElement) {
        if (count > 0) {
            countElement.textContent = count;
            countElement.classList.remove('hidden');
        } else {
            countElement.classList.add('hidden');
        }
    }
}

/**
 * Display a notification
 * @param {string} message - Message to display
 */
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed top-20 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in z-50';
    notification.textContent = message;

    document.body.appendChild(notification);

    // Disappear after 3 seconds
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

/**
 * Get the current cart items
 * @returns {Array} Array of cart items
 */
function getCart() {
    return JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');
}

/**
 * Get the total of the cart
 * @returns {number} Total of the cart
 */
function getCartTotal() {
    const cart = getCart();
    return cart.reduce((total, item) => total + item.price, 0);
}
