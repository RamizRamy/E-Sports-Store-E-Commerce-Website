function addToCart(product) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // check if product already exists
  let existing = cart.find(item => item.id == product.id);

  if (existing) {
    existing.quantity += 1;
  } else {
    product.quantity = 1;
    cart.push(product);
  }

  localStorage.setItem("cart", JSON.stringify(cart));

  alert("Added to cart!");
}


function loadCart() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let container = document.getElementById("cart-items");
  let cart_counter = document.getElementById("cart-count");
  let total = 0;

  cart_counter.innerText = cart.length 

  container.innerHTML = "";

  if (cart.length === 0) {
    container.innerHTML = "<p>Your cart is empty</p>";
    document.getElementById("cart-total").innerText = "0";
    return;
  }

  cart.forEach((item, index) => {
    total += item.price * item.quantity;

    container.innerHTML += `
      <div class=" cart-items mb-3 p-3">
        <div class="d-flex justify-content-between align-items-center">
          
          <div class="d-flex align-items-center gap-3">
            <img src="imgs/products/${item.image}" width="80">
            <div>
              <h5>${item.name}</h5>
              <p>$${item.price}</p>
            </div>
          </div>

          <div>
            <button onclick="changeQuantity(${index}, -1)" class="btn btn-sm btn-danger">-</button>
            <span class="mx-2">${item.quantity}</span>
            <button onclick="changeQuantity(${index}, 1)" class="btn btn-sm btn-success">+</button>
          </div>

          <div>
            <button onclick="removeItem(${index})" class="btn btn-sm btn-outline-danger">
              Remove
            </button>
          </div>

        </div>
      </div>
    `;
  });

  document.getElementById("cart-total").innerText = total.toFixed(2);
}

function changeQuantity(index, change) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  cart[index].quantity += change;

  if (cart[index].quantity <= 0) {
    cart.splice(index, 1);
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  loadCart();
}

function removeItem(index) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  cart.splice(index, 1);

  localStorage.setItem("cart", JSON.stringify(cart));
  loadCart();
}

function removeItem(index) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  cart.splice(index, 1);

  localStorage.setItem("cart", JSON.stringify(cart));
  loadCart();
}

function clearCart() {
  localStorage.removeItem("cart");
  loadCart();
}

function loadCheckout() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let container = document.getElementById("checkout-items");
  let total = 0;

  container.innerHTML = "";

  cart.forEach(item => {
    total += item.price * item.quantity;

    container.innerHTML += `
      <div class="d-flex justify-content-between">
        <span>${item.name} x ${item.quantity}</span>
        <span>$${item.price * item.quantity}</span>
      </div>
    `;
  });

  document.getElementById("checkout-total").innerText = total.toFixed(2);
}

function placeOrder(e) {
  e.preventDefault();

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  if (cart.length === 0) {
    alert("Cart is empty!");
    return;
  }

  alert("Order placed successfully! 🎉");

  localStorage.removeItem("cart");

  window.location.href = "index.php";
}



document.addEventListener("DOMContentLoaded", function () {
  if (document.getElementById("checkout-items")) {
    loadCheckout();
  }
});
document.addEventListener("DOMContentLoaded", loadCart);
