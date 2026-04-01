<?php

    include("./includes/header.php");

?>

<div class="container py-5 checkout-section">
    <div class="row g-5">
        
        <div class="col-lg-7">
            <h2 class="display-6 fw-bold mb-4 acsent text-uppercase">Shipping Details</h2>
            <form onsubmit="placeOrder(event)" class="checkout-form p-4 rounded-4">
                
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-dark text-white border-secondary" id="fullName" placeholder="Full Name" required>
                            <label for="fullName" class="text-secondary">Full Name</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control bg-dark text-white border-secondary" id="email" placeholder="name@example.com" required>
                            <label for="email" class="text-secondary">Email Address</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating mb-4">
                            <textarea class="form-control bg-dark text-white border-secondary" id="address" placeholder="Address" style="height: 120px" required></textarea>
                            <label for="address" class="text-secondary">Shipping Address</label>
                        </div>
                    </div>
                </div>

                <h4 class="text-white mb-3 small text-uppercase fw-bold opacity-75">Payment Method</h4>
                <div class="payment-options d-flex gap-3 mb-4">
                    <div class="payment-card active w-100 p-3 text-center border rounded-3">
                        <i class="bi bi-credit-card fs-4 mb-2 d-block"></i>
                        <small>Credit Card</small>
                    </div>
                    <div class="payment-card w-100 p-3 text-center border rounded-3 opacity-50">
                        <i class="bi bi-paypal fs-4 mb-2 d-block"></i>
                        <small>PayPal</small>
                    </div>
                </div>

                <button class="btn btn-cyan-fill w-100 py-3 fw-bold text-uppercase">
                    Confirm & Place Order <i class="bi bi-chevron-right ms-2"></i>
                </button>
            </form>
        </div>

        <div class="col-lg-5">
            <div class="summary-card p-4 rounded-4 sticky-top" style="top: 100px;">
                <h4 class="fw-bold mb-4">Review Your Gear</h4>
                
                <div id="checkout-items" class="mb-4 custom-scrollbar" style="max-height: 300px; overflow-y: auto;">
                    </div>

                <div class="order-math bg-black bg-opacity-25 p-3 rounded-3 mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-secondary">Subtotal</span>
                        <span class="text-white">$<span id="checkout-subtotal">0</span></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary">Shipping</span>
                        <span class="text-success small fw-bold">FREE</span>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Total Amount</h5>
                    <h3 class="acsent mb-0 fw-bold">$<span id="checkout-total">0</span></h3>
                </div>
                
                <div class="mt-4 pt-4 border-top border-secondary border-opacity-25 text-center">
                    <small class="text-secondary">
                        <i class="bi bi-shield-lock me-1"></i> Secure 256-bit SSL Encrypted Payment
                    </small>
                </div>
            </div>
        </div>

    </div>
</div>

<?php

    include("./includes/footer.php")

?>