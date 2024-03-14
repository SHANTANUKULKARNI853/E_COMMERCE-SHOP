// Get all the "Add to Cart" buttons
const addToCartButtons = document.querySelectorAll('.product button');

// Add click event listener to each button
addToCartButtons.forEach((button) => {
  button.addEventListener('click', addToCart);
});

// Function to handle "Add to Cart" button click
function addToCart(event) {
  const product = event.target.parentNode;
  const productName = product.querySelector('h3').textContent;

  // Perform some action, such as adding the product to the cart or displaying a message
  alert(`Added ${productName} to the cart!`);
}
