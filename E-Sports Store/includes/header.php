<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imgs/image.png" type="image/x-icon">
    <title>E-Sports</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>     
     
     
<nav class="navbar navbar-expand-md navbar-dark sticky-top gaming-nav">
    <div class="container-fluid px-lg-5">
        <a class="navbar-brand fw-bold acsent logo-text" href="../index.php">
            ESPORTS<span class="text-white">.</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto gap-lg-4 mt-2 mt-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link nav-text" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text" href="../products.php">Gear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text" href="../aboutus.php">Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-text" href="../contactus.php">Support</a>
                </li>
                
                <li class="nav-item ms-lg-2">
                    <a class="nav-link cart-icon-wrapper" href="../cart.php">
                        <i class="fa-solid fa-cart-shopping acsent"></i>
                        <span id="cart-count-nav" class="cart-badge-counter">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script src="./js/bootstrap.bundle.min.js"></script>

<script>
    function updateNavCartCount() {

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    let totalItems = cart.length; 


    const navCounter = document.getElementById('cart-count-nav');
    if (navCounter) {
        navCounter.innerText = totalItems;
        

        navCounter.style.display = totalItems > 0 ? 'flex' : 'none';
    }
    
    
}


document.addEventListener('DOMContentLoaded', updateNavCartCount);


</script>


