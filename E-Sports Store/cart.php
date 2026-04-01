<?php

    include("./includes/header.php");

?>

<div class="container py-5 cart-section">
    <div class="row g-5">
        <div class="col-lg-8">
            <h2 class="display-6 fw-bold mb-4 acsent">Your Arsenal <span class="text-secondary fs-5">(<span id="cart-count">0</span> items)</span></h2>
            
            <div id="cart-items"  class="d-flex flex-column gap-3" >
                <div class="cart-items p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <img src="imgs/products/" class="cart-img" alt="Product">
                        <div>
                            <h5 class="mb-0 fw-bold">Gaming Mouse Z1</h5>
                            <small class="text-secondary">Category: Peripherals</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <p class="mb-0 fw-bold acsent">$59.99</p>
                        <button class="btn btn-sm text-danger border-0 p-0 mt-1">Remove</button>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button onclick="clearCart()" class="btn btn-sm btn-outline-danger opacity-75">
                    <i class="bi bi-trash3 me-2"></i>Empty Cart
                </button>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="summary-card p-4">
                <h4 class="fw-bold mb-4">Order Summary</h4>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary">Subtotal</span>
                    <span class="text-white fw-bold">$<span id="cart-subtotal">0</span></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-secondary">Shipping</span>
                    <span class="text-success small fw-bold">FREE</span>
                </div>
                <hr class="border-secondary opacity-25 my-3">
                <div class="d-flex justify-content-between mb-4">
                    <span class="fs-5">Total</span>
                    <span class="fs-4 fw-bold acsent">$<span id="cart-total">0</span></span>
                </div>
                
                <div class="d-grid gap-2">
                    <a href="checkout.php" class="btn btn-cyan-fill btn-lg py-3">
                        Secure Checkout <i class="bi bi-shield-check ms-2"></i>
                    </a>
                    <a href="index.php" class="btn btn-link text-secondary text-decoration-none small mt-2">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    include("./includes/footer.php");

?>