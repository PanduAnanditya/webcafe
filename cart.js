document.addEventListener('DOMContentLoaded', function() {
    const addToCartButton = document.getElementById('addToCartButton');
    if (addToCartButton) {
        addToCartButton.addEventListener('click', function() {
            const menuItem = this.closest('.menu-content');
            const checkboxes = menuItem.querySelectorAll('input[type="checkbox"]:checked');
            let items = [];

            checkboxes.forEach(checkbox => {
                const row = checkbox.closest('tr');
                const itemName = row.querySelector('label').textContent.trim();
                const itemPrice = row.querySelector('td:nth-child(2)').textContent.trim();
                items.push({ name: itemName, price: itemPrice });
            });

            if (items.length > 0) {
                updateCart(items);
                saveCart(items);
            } else {
                alert('Silakan pilih item terlebih dahulu');
            }
        });
    }
});

function updateCart(items) {
    const cartBox = document.getElementById('cart');
    let cartContent = cartBox.querySelector('.cart-content');
    if (!cartContent) {
        cartContent = document.createElement('div');
        cartContent.classList.add('cart-content');
        cartBox.appendChild(cartContent);
    }

    items.forEach(item => {
        const itemElement = document.createElement('p');
        itemElement.textContent = `${item.name} - ${item.price}`;
        cartContent.appendChild(itemElement);
    });
}

function saveCart(items) {
    fetch('save-cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(items)
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => console.error('Error:', error));
}
