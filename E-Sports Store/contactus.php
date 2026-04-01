<?php include("./includes/header.php"); ?>

<div class="container py-5 contact-section">
    <div class="row g-0 rounded-4 overflow-hidden border border-secondary border-opacity-25 shadow-lg">
        
        <div class="col-lg-6 d-none d-lg-block position-relative">
            <img src="./imgs/contact us/contactus.png" class="h-100 w-100 object-fit-cover" alt="Support Hub">
            <div class="contact-overlay"></div>
            <div class="contact-badge px-3 py-2 rounded-pill small fw-bold">
                <span class="acsent">●</span> SUPPORT ONLINE
            </div>
        </div>

        <div class="col-lg-6 bg-dark p-5">
            <div class="mb-4">
                <h2 class="acsent fw-bold text-uppercase mb-1">Contact Us</h2>
                <p class="text-secondary small">We would love to hear from you !</p>
            </div>

            <form id="gamingContactForm" onsubmit="handleContact(event)">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control bg-transparent text-white border-secondary" id="name" placeholder="Name" required>
                    <label for="name" class="text-secondary">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control bg-transparent text-white border-secondary" id="email" placeholder="Email" required>
                    <label for="email" class="text-secondary">Email</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea class="form-control bg-transparent text-white border-secondary" id="message" placeholder="Message" style="height: 150px" required></textarea>
                    <label for="message" class="text-secondary">Message Briefing</label>
                </div>

                <button type="submit" id="submitBtn" class="btn btn-cyan-fill w-100 py-3 fw-bold text-uppercase">
                    Send<i class="bi bi-send-fill ms-2"></i>
                </button>
            </form>

            <div class="mt-5 d-flex justify-content-between align-items-center opacity-50 small text-uppercase fw-bold text-secondary">
                <span><i class="bi bi-geo-alt-fill me-1"></i> Cairo HQ</span>
                <span><i class="bi bi-cpu-fill me-1"></i> Build v1.0</span>
            </div>
        </div>
    </div>
</div>



<script>
function handleContact(e) {
    e.preventDefault();
    const btn = document.getElementById('submitBtn');
    const originalContent = btn.innerHTML;

    // Start loading state
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> ENCRYPTING...';

    // Simulate server delay
    setTimeout(() => {
        btn.innerHTML = '<i class="bi bi-check-all fs-5 me-2"></i> TRANSMITTED';
        btn.classList.replace('btn-cyan-fill', 'btn-success');
        
        alert("Transmission successful! The ESports team will respond shortly. ✅");
        
        // Reset form after a delay
        setTimeout(() => {
            e.target.reset();
            btn.disabled = false;
            btn.innerHTML = originalContent;
            btn.classList.replace('btn-success', 'btn-cyan-fill');
        }, 2000);
    }, 1800);
}
</script>


<?php

    include("./includes/footer.php");

?>