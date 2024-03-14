// JavaScript code to calculate the total price of items in the cart
function calculateTotal() {
  var table = document.getElementById('cart-table');
  var rows = table.getElementsByTagName('tr');
  var total = 0;

  for (var i = 1; i < rows.length; i++) {
    var priceCell = rows[i].getElementsByTagName('td')[1];
    var price = parseFloat(priceCell.textContent.trim().substring(1));
    total += price;
  }

  return total.toFixed(2);
}

// JavaScript code to remove an item from the cart
function removeFromCart(id) {
  // Remove the item from the cart in the backend (e.g., using AJAX)

  // Remove the row from the table
  var row = document.getElementById('row-' + id);
  if (row) {
    row.parentNode.removeChild(row);
  }

  // Recalculate the total price
  var total = calculateTotal();
  var totalElement = document.getElementById('total');
  if (totalElement) {
    totalElement.textContent = '$' + total;
  }

  // Display a message or perform any other desired action
  alert('Item removed from cart.');
}

// Example: Attach click event handlers to the remove links
var removeLinks = document.getElementsByClassName('remove-link');
for (var i = 0; i < removeLinks.length; i++) {
  var removeLink = removeLinks[i];
  removeLink.addEventListener('click', function(event) {
    event.preventDefault();
    var id = this.dataset.id;
    removeFromCart(id);
  });
}

// JavaScript code for Stripe payment handling
var stripe = Stripe('pk_test_51NIn9fSCMx4NNjOmPAUlHd4DkCgOq2mAkFB9vIgNWJnDCBnVfaCwiXvorGjRsUXpt5MwGhoXcMhFYugHYFsgTtej00rNEOWNy8');
var elements = stripe.elements();

// Custom styling for the card element
var style = {
  base: {
    fontSize: '16px',
    color: '#32325d',
    '::placeholder': {
      color: '#aab7c4'
    }
  }
};

// Create an instance of the card element
var card = elements.create('card', { style: style });
card.mount('#card-element');

// Handle form submission
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  // Disable the submit button to prevent multiple submissions
  var submitButton = document.getElementById('pay-button');
  submitButton.disabled = true;

  // Create a token or display an error when the form is submitted
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user about any errors
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

      // Enable the submit button
      submitButton.disabled = false;
    } else {
      // Token was created, submit the form with the token ID
      var tokenInput = document.createElement('input');
      tokenInput.type = 'hidden';
      tokenInput.name = 'stripeToken';
      tokenInput.value = result.token.id;
      form.appendChild(tokenInput);

      // Display the payment processing message on the same page
      var processingMessage = document.createElement('p');
      processingMessage.textContent = 'Your payment is being processed. Please wait...';
      form.appendChild(processingMessage);

      // Programmatically submit the form
      form.submit();
    }
  });
});

